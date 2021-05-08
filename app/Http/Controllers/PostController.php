<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Timeline(){
        return view('posts.timeline');
    }

    public function PostCreate(){
        return view('posts.postcreate');
    }

    public function PostAdd(Request $request){
        return Redirect()->route('posts.timeline');
    }

}
