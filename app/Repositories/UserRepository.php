<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class UserRepository
{
  public static function getCurrentUser()
  {
    $getCurrentUser = Post::select('body')
      ->where('user_id','=',Auth::id())
      ->orderBy('posts.id', 'desc')
      ->get();

    return $getCurrentUser;
  }



}


?>