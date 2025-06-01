<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index() {
      $post = Post::find(1); //обращаемся к модели и ее методу и READ с базы по номеру id
     dd($post);
   }
}
