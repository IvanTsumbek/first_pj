<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
      // $post = Post::find(1); //обращаемся к модели и ее методу и READ с базы по номеру id
      // dd($post);


      // $posts = Post::all();                //считываем все записи
      // foreach ($posts as $post){
      //    dump ($post->title);
      // }


      // $posts = Post::where('is_published', 1)->get();      //считываем записи по атрибуту
      // dd($posts);


      // $post = Post::where('is_published', 0)->first();      //считываем первую запись по атрибуту
      // dd($post->title);






   }
}
