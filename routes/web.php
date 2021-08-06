<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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
Route::get('/try', function(){
    $user = \App\Models\User::get();
    //$user = \App\Models\User::has('posts')-> with('post')->get();
   // $user = \App\Models\User::with('addresses')-> get();
   // $user[0] -> addresses()->create([
    //    'country' => 'Nepal'
    //]);
    //dd($user[0]);
    return view ('try.index', compact('user'));
});
Route::get('/posts', function() {
    //$tag = \App\Models\Tag::first();
    // $post =\App\Models\Post::with('tags')->first();
    // $post -> tags() ->attach([2,3,4]);
    // dd($post);
    //$post->tags()->attach($tag->id);
    $posts = \App\Models\Post::with(['user', 'tags'])->get();
    return view ('posts.index',compact ('posts'));
    // \App\Models\Post::create([
    //     'user_id' => 1,
    //     'title' => 'post title'
    // ]);
    // \App\Models\Post::create([
    //     'user_id' => 2,
    //     'title' => 'post title'
    // ]);
    // $posts = \App\Models\Post::get();
    // return view ('posts.index', compact('posts'));
});

Route::resource('projects', ProjectController::class);
