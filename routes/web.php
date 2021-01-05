<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

Route::resource('posts', PostsController::class);

// Route::get('/welcome', function () {
//     return ['foo' => 'bar'];
// });

// Route::get('/test', function () {
//     return view('test', [
//         'name' => request('name')
//     ]);
// });

// Route::get('/posts/{post}', function($post) {
//     $posts = [
//         'my-first-post' => 'Hi my first post',
//         'my-second-post' => 'Second post'
//     ];

//     if (! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, that post was not found');
//     }

//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });

// Route::get('/posts/{post}', [PostsController::class, 'show']);

// Route::get('/about', function () {
//     return view('pages.about');
// });


// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is user ' . $name . ' with an id of ' . $id;
// });
