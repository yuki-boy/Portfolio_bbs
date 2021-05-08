<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('posts.timeline');

// Post Route
Route::get('/timeline', [PostController::class, 'Timeline'])->name('posts.timeline');
Route::get('/postcreate', [PostController::class, 'PostCreate'])->name('posts.create');
Route::post('/post/add', [PostController::class, 'PostSave'])->name('posts.save');


