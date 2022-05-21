<?php

namespace App\Models;

class Post 
{
   private static $blog_posts = [
    [
        "title"  => "Judul Pertama",
        "slug"   => "judul-pertama",
        "author" => "Satrio Setiawan",
        "body"   => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, ducimus est tempore modi aliquam consequuntur"
    ],
    [
        "title"  => "Judul Kedua",
        "slug"   => "judul-kedua",
        "author" => "Andrex Setiawan",
        "body"   => "facilis alias aperiam at enim obcaecati iusto voluptatibus debitis deserunt esse sed repellat minus quo nihil."
    ],
   ];

   public static function all(){
       return collect(self::$blog_posts);
   }

   public static function find($slug){
     $posts = static::all();
     return $posts->firstWhere('slug', $slug);
   }
}
