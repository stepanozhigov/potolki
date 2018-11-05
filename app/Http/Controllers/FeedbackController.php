<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Review;

class FeedbackController extends Controller
{
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
}
