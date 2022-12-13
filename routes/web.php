<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostsController;

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

// Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);


// Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
// Route::get('/addpost', [\App\Http\Controllers\PostController::class, 'create']);
// Route::get('/addcoment', [\App\Http\Controllers\CommentController::class, 'tambahkomen']);
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::resource('/comment', \App\Http\Controllers\CommentController::class);


