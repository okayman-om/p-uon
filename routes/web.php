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
    return view('pages/index');
});

Route::get('/videos', function () {
    return view('pages/videos');
});

Route::get('/blog', function () {
    return view('pages/blog');
});


Route::get('/singlepost', function () {
    return view('pages/singlepost');
});
// Route::get('/admin', function() {
//     return view('dashboard/admin');
// });

Route::get('admin', [PostController::class, 'show']);
Route::post('post', [PostController::class, 'store']);

Route::get('blog', [PostController::class, 'index']);
