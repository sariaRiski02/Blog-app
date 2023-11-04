<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});







Route::get('/posts', [PostController::class, 'index']);

Route::get('/about', function () {
    return view(
        'about',
        [
            'title' => 'About',
            'name' => 'Rizky saria',
            'email' => 'muhammatsaria026@student.unsrat.ac.id',
            'image' => 'ppriski.jpg'
        ]
    );
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});


// halaman single post
Route::get('posts/{slug}', [PostController::class, 'show']);
