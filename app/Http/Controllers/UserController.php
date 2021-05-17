<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Repositories\UserRepository;
use DB;

class UserController extends Controller
{
    public function Mypage($user_id)
    {
		$myPages = UserRepository::getCurrentUser();

        return view('posts.mypage', compact('myPages'));
    }
}
