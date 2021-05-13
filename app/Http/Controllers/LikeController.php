<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function Like(Request $request, $post_id)
    {
        $like = new Like();
        $like->user_id = Auth::id();
        $like->post_id = $post_id;
        $like->save();

        return redirect('timeline');
    }

    public function Unlike(Request $request, $post_id)
    {
        $user_id = Auth::id();
        $like = Like::where('user_id','=',$user_id)->where('post_id','=',$post_id)->first();
        $like->delete();

        return redirect('timeline');
    }


}
