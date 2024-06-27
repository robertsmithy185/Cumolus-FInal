<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentPrompt;
use App\Models\prompt;
use Illuminate\Support\Facades\Auth;

class CommentPromptController extends Controller
{
    public function store(Request $request, $prompt_id)
    {
        $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        $comment = new CommentPrompt();
        $comment->comment = $request->input('comment');
        $comment->username = auth()->user()->username;
        $comment->prompt_id = $prompt_id;
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully');
    }
}
