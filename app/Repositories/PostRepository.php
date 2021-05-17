<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
  public static function getAllPost()
  {
    $getAllPost = Post::select('posts.id', 'posts.body', 'posts.user_id', 'users.name')
      ->join('users','users.id','=','posts.user_id')
      ->orderBy('posts.id','desc')
      ->paginate(50);

    return $getAllPost;
  }

  public static function savePost(Request $request)
  {
    // save機能のコンポーネントの仕方がわからない
  }

  public static function getDetailPost($post_id)
  {
    $getDetailPost = Post::with('User')->find($post_id);

    return $getDetailPost;
  }

  public static function deletePost($post_id)
  {
    $deletePost = Post::find($post_id);
    
    return $deletePost->delete();
  }

  




}






?>