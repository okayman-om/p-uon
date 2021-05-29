<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustompostController;

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
    return view('pages/index');
});

Route::get('/videos', function () {
    return view('pages/videos');
});

// Route::get('/blog', function () {
//     return view('pages/blog');
// });

// Route::get('/ourstories', function () {
//     return view('pages/ourstories');
// });

Route::get('/singlepost', function () {
    return view('pages/singlepost');
});
// Route::get('/admin', function() {
//     return view('dashboard/admin');
// });

Route::get('/admin', [PostController::class, 'show']);
Route::get('/admin2', [CustompostController::class, 'show']);

Route::post('/post', [PostController::class, 'store']);
Route::post('/post-story', [CustompostController::class, 'store']);


Route::get('/blog', [PostController::class, 'index']);
Route::get('/ourstories', [CustompostController::class, 'index']);


Route::get('/post/{slug}', [PostController::class, 'getPost']);
Route::get('/story/{slug}', [CustompostController::class, 'getPost']);