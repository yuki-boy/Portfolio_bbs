<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function CommentCreate($post_id)
    {
        $post_id = $post_id;
        return view('posts.commentcreate',compact('post_id'));
    }

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

        return redirect()->route('posts.timeline')->with('success', 'コメントしました');
    }

    public function CommentDelete($post_id, $user_id, $comment_id)
    {
        $comment_delete = Comment::find($comment_id);
        $comment_delete->delete();

        return redirect()->back()->with('success', 'コメントを削除しました');
    }

}
