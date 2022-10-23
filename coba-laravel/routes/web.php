<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

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
    return view('home',[
        'title' => 'Home',
        'active' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
        'active' => 'About',

        'name' => 'Muhammad Advie Rifaldy',
        'email' => 'madvier83@gmail.com',
        'img' => 'pp.png'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function(){
    return view('categories',[
        'title' => 'Categories',
        'active' => 'Category',
        'categories' => Category::all()
    ]);
});

Route::get('categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' => $category->name,
        'active' => 'Category',
        'posts' => $category->post->load(['category', 'author']),

    ]);
});

Route::get('author/{author:username}', function(User $author){
    return view('posts',[
        'title' => "Post by author : $author->name",
        'active' => 'Blog',
        'posts' => $author->posts->load(['category', 'author'])
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']); 
Route::resource('/dashboard/posts',DashboardPostController::class)->middleware('auth');