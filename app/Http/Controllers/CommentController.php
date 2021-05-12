<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function CommentSave(Request $request)
    {
        $validatedDate = $request->validate([
            'body' => 'required|max:140',
        ],
        [
            'body.required' => '140字以内で投稿して下さい',
        ]);

        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $request->post_id;
        $comment->body = $request->body;
        $comment->save();

        return redirect()->back()->with('success', 'コメントしました');
    }
}
