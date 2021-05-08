<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function Timeline(){
        $allPost = Post::latest()->paginate(10);

        return view('posts.timeline', compact('allPost'));
    }

    public function PostCreate(){
        return view('posts.postcreate');
    }

    public function PostSave(Request $request){
        $this->validate($request, [
            'user_id' => 'required',
            'body' => 'required|max:140',
        ]);

        $post = new Post();
        // $post->user_id = Auth::user()->id;
        $post->body = $request->body;
        $post->save();

        return redirect('/timeline');
    }

}
