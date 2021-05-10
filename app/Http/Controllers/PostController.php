<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use DB;
use Validator;


class PostController extends Controller
{
    public function Timeline()
    {
        $allPost = Post::latest()->paginate();

        return view('posts.timeline', compact('allPost'));
    }

    public function PostCreate()
    {
        return view('posts.postcreate');
    }

    public function PostSave(Request $request)
    {
        $validatedDate = $request->validate([
            'body' => 'required|max:140',
        ],
        [
            'body.required' => '140字以内で投稿して下さい',
        ]);

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->body = $request->body;
        $post->save();

        return redirect('timeline');
    }

}
