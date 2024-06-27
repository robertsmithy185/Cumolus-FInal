<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $image_id)
    {
        $request->validate([
            'comment' => 'required|string'
        ]);

        $comment = new Comment();
        $comment->image_id = $image_id;
        $comment->username = Auth::user()->username;
        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect()->route('image.view_content', ['name' => $comment->image->name, 'image_id' => $image_id])->with('success', 'Comment added successfully');
    }
}

