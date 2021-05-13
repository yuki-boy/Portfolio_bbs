<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'body'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function Like_Check()
    {
        $user_id = Auth::id();
        $likers = array();
        foreach($this->likes as $like){
            array_push($likers, $like->user_id);
        }

        if(in_array($user_id, $likers)){
            return true;
        }else{
            return false;
        }
    }
}
