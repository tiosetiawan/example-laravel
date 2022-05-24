<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Routing\Route as RoutingRoute;


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
    $data = [
        "title" => "Home",
        "active" => "home",
    ];
    return view('home',$data);
});

Route::get('/about', function () {
    $data = [
        "title" => "About",
        "active" => "about"
    ];
    return view('about', $data);
});


Route::get('/posts',[PostController::class,'index']);

Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title'  => "Post By Category : $category->name",
        'active' => 'categories',
        'posts'  => $category->posts->load('category','author')
    ]);
});

Route::get('categories', function(){
    return view('categories', [
        'title'      => 'Post Categories',
        'active'     => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title'    => "Post By Author : $author->name",
        'posts'    => $author->posts->load('category','author')
    ]);
});

Route::get('/login', [LoginController::class,'index'])->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');
