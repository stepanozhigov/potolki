<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Comment;
use App\Review;
use App\City;
use App\Jobs\ProcessFeedback;
use App\Connectors\BitrixConnector;
use App\Lead;
use App\Mail\Survey;

class FeedbackController extends Controller
{
    public function quiz (Request $request)
    {
        $desc = "";
        $bitrixConnector = new BitrixConnector();

        foreach ($request->questions as $question => $answer) {
            $desc.= "{$question}: {$answer} \r\n";
        }
        $data = [
            'title' => 'Новый результат опроса',
            'name'  =>  'Новый результат опроса',
            'phone' =>  $request->phone,
            'direction' =>  56,
            'description'   =>  $desc,
            'city'  =>  $request->city,
            'source'    =>  'WEB'
        ];
        //dd($data);
        $bitrixConnector->addLead($data);
    }

    public function quiz2 (Request $request)
    {
		$arVisits = session('visits');

		$desc = "";
        $desc.= "Площадь: ". $request->area." \r\n";
        $desc.= "Светильников: ". $request->lamps." \r\n";
        $desc.= "Подарок: ". $request->gift." \r\n";

		$lead = Lead::create([
			'name'	=> 'Новый результат опроса',
			'phone'	=> $request->phone,
			'city_id' => $request->city,
			'direction_id' => 56,
			'roistat'	=>	$request->cookie('roistat_visit'),
			'visits'	=>	$arVisits,
			'description'   =>  $desc,
		]);

		ProcessFeedback::dispatch($lead);

		return response()->json([
			'success'	=> true
		]);
    }

    public function addSurvey(Request $request)
    {

        if (!empty($request->message))
        {
            $res = Mail::to('adresplus@mail.ru')->send(new Survey($request->message));

            //mail('adresplus@mail.ru, kabakovki@yandex.ru, m1r.stillrunner@gmail.com', 'Оценка сайта', $request->message);
        }
    }

    public function addComment (Request $request)
    {
        $comment = new Comment($request->all());
        $comment->save();
    }

    public function addReview(Request $request)
    {
        $review = new Review;

        $review->direction_id = $request->direction_id;
        $review->text = $request->text;
        $review->fio = $request->fio;
        $review->social = $request->social;
        $review->avatar = $request->avatar;
        $review->title = $request->fio;
        $review->link = $request->link;
        $review->city_id = $request->city;

        $review->save();

        if ($video = $request->file('video'))
        {
            $extention = $video->extension();
            $videoName = "{$review->fio} видео-отзыв";

            $path = $video->storeAs("reviews/{$review->id}", str_slug($videoName).".{$extention}", 'public');

            $review->video = $path;
            $review->save();
        }

        if ($photos = $request->file('photos'))
        {
            $arPhotos = [];

            foreach ($photos as $id => $photo)
            {
                $extention = $photo->extension();
                $photoName = "{$review->fio} фото {$id}";
                $photoSlug = str_slug($photoName).".{$extention}";

                $path = $photo->storeAs("reviews/{$review->id}", $photoSlug, 'public');

                $arPhotos[] = $path;

                \Image::make(public_path("storage/{$path}"))->resize('480', null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save(public_path("storage/{$path}"));

            }

            $review->photos = json_encode($arPhotos);
            $review->save();
        }

    }

    public function addLead(Request $request)
    {
		$visits = "";
        $arVisits = session('visits');

        foreach ($arVisits as $id => $visit) {
            $visits.= "Дата: {$visit['time']} \r\n";
            $visits.= "Страница: {$visit['page']} \r\n";
            $visits.= "Реферер: {$visit['referer']} \r\n";
            $visits.= "utm source: {$visit['utm_source']} \r\n";
            $visits.= "utm medium: {$visit['utm_medium']} \r\n";
            $visits.= "utm campaign: {$visit['utm_campaign']} \r\n";
            $visits.= "utm term: {$visit['utm_term']} \r\n";
            $visits.= "\r\n \r\n \r\n";
        }

        if($request->city == 792){
            $description = $request->city_name;
        }else{
            $description = null;
        }

		$lead = Lead::create([
			'name'	=> $request->name,
			'phone'	=> $request->phone,
			'city_id' => $request->city,
			'direction_id' => 56,
			'roistat'	=>	$request->cookie('roistat_visit'),
            'visits'	=>	$arVisits,
            'description' => $visits.$description
		]);

		ProcessFeedback::dispatch($lead);

		return response()->json([
			'success'	=> true
		]);
    }

    public function feedback (Request $request, City $city)
    {
        $submitted = $request->session()->get('submitted');

        $request->session()->put('submitted', true);

        $this->addLead($request);
        // if (!$submitted)
        // {
            //
        // }

        //return view('common.forms.success', ['city' => $city]);
        return redirect()->route('forms.success', ['city' => $city]);
    }

    public function success (Request $request, City $city)
    {
        return view('common.forms.success', ['city' => $city]);
    }

    public function proxyLead(Request $request)
    {
        $bitrixConnector = new BitrixConnector;

        $comments = "";

        foreach ($request->object['answers'] as $answer)
        {
            $comments.= "{$answer['question']}: {$answer['answer']} <br>";
        }

        $bitrixConnector->addLead([
            'title' =>  $request->object['form_name'],
            'name'  =>  $request->object['answers'][0]['answer'],
            'phone' =>  $request->object['answers'][1]['answer'],
            'source'    =>  '21',
            'city'  =>  $request->city ?? '',
            'direction' =>  $request->direction ?? '',
            'comment'   =>  $comments
        ]);

        echo 'ok';
        die();
    }

    public function searchPhoneInMessage(Request $request)
    {
        Log::info($request);
        echo 'ok';
    }
}
