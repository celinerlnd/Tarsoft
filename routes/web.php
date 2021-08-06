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
    // \App\Models\Post::create([
    //     'user_id' => 1,
    //     'title' => 'post title'
    // ]);
    // \App\Models\Post::create([
    //     'user_id' => 2,
    //     'title' => 'post title'
    // ]);
    $posts = \App\Models\Post::get();
    return view ('posts.index', compact('posts'));
});

Route::resource('projects', ProjectController::class);
