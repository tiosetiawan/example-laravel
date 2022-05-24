<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
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

