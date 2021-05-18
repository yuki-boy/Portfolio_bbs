<?php

namespace App\Repositories;

use App\Models\Comment;

class CommentRepository
{
  public static function deleteComment($comment_id)
  {
    $deleteComment = Comment::find($comment_id);
    
    return $deleteComment->delete();
  }


}

?>