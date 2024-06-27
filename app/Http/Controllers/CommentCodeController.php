<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentCode;
use App\Models\Code;
use Illuminate\Support\Facades\Auth;


class CommentCodeController extends Controller
{
    public function store(Request $request, $code_id)
    {
        $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        $comment = new CommentCode();
        $comment->comment = $request->input('comment');
        $comment->username = auth()->user()->username;
        $comment->code_id = $code_id;
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully');
    }
}
