<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use DB;

class UserController extends Controller
{
    public function Mypage($user_id){
        
		// $auth_user_posts = Post::select('user_id', 'body')
		// ->where('user_id', '=', Auth::id())
		// ->orderBy('posts.id', 'desc')
		// ->get();

        return view('posts.mypage', compact('user_id'));
    }
}
