<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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
    return view('baru' ,[
		"title" => "Home",
		'active' => 'home'
	]);
});

Route::get('/about', function () {
    return view('get' ,[
		"title" => "About",
		'active' => 'about',
		"name" => "adiyat",
		"email" => "adiyat@gmail.com",
		"gambar" => "adit.png"
	]);
});



Route::get('/posts', [PostController::class, 'index']);

//bikin halaman khusus untuk postingan

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
//nyari string pake fungsi pluck

Route::get('/categories', function () {
	return view('categories', [
		'title' => 'Post Categories',
		'active' => 'categories',
		'categories' => Category::all()
	]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);