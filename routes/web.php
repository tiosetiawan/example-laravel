<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
        "title" => "HOME"
    ];
    return view('home',$data);
});

Route::get('/about', function () {
    $data = [
        "title" => "ABOUT"
    ];
    return view('about', $data);
});


Route::get('/posts',[PostController::class,'index']);

Route::get('posts/{slug}', [PostController::class,'show']);