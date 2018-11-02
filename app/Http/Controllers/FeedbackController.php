<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class FeedbackController extends Controller
{
    public function addComment (Request $request)
    {
        $comment = new Comment($request->all());
        $comment->save();
    }
}
