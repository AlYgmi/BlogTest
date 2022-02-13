<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
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

Route::get('/categories/{category:slug}', function(Category $category) {
	return view('posts', [
		'title' => "Post By category : $category->nama",
		'active' => 'categories',
		'posts' => $category->posts->load('category', 'author')
	]);
});

Route::get('/authors/{author:username}', function(User $author) {
	return view('posts', [
		'title' => "Post By Author : $author->name",
		'posts' => $author->posts->load('category', 'author')
	]);
});