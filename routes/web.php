<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function(){

    
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('posts.timeline');
    
    // Post Route
    Route::get('/timeline', [PostController::class, 'Timeline'])->name('posts.timeline');
    Route::get('/postcreate', [PostController::class, 'PostCreate'])->name('posts.create');
    Route::post('/postsave', [PostController::class, 'PostSave'])->name('posts.save');
    Route::get('/detail/{post_id}', [PostController::class, 'PostDetail'])->name('posts.detail');
    Route::get('/delete/{post_id}', [PostController::class, 'PostDelete'])->name('posts.delete');

    // User Route
    Route::get('/mypage/{user_id}', [UserController::class, 'Mypage'])->name('mypage');

    // Comment Route
    Route::get('/commentcreate/{post_id}', [CommentController::class, 'CommentCreate'])->name('comments.create');
    Route::post('/detail/{post_id}/commentsave', [CommentController::class, 'CommentSave'])->name('comments.save');
    Route::get('/commentdelete/{post_id}/{user_id}/{comment_id}', [CommentController::class, 'CommentDelete'])->name('comments.delete');

    // Like Route
    Route::get('/like/{post_id}', [LikeController::class, 'Like'])->name('like');
    Route::get('/unlike/{post_id}', [LikeController::class, 'Unlike'])->name('unlike');

    
});