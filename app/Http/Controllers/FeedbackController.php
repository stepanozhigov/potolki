<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Comment;
use App\Review;
use App\Connectors\BitrixConnector;

class FeedbackController extends Controller
{
 
    public function addSurvey(Request $request)
    {
        if (!empty($request->message))
        {
            mail('adresplus@mail.ru', 'Оценка сайта', $request->message);
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
        $bitrixConnector = new BitrixConnector();

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

        $bitrixConnector->addLead([
            'title' =>  $request->name,
            'name'  =>  $request->name,
            'phone' =>  $request->phone,
            'direction' =>  59,
            'description'   =>  $visits,
            'city'  =>  $request->city,
            'source'    =>  'WEB'
        ]);
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
