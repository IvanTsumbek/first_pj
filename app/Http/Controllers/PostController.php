<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
      $posts = Post::all();
      return view('post.index', compact('posts'));
   }


   public function create()
   {
      return view('post.create');
   }


   public function store()
   {
      $data = request()->validate([
         'title' => 'string',
         'content' => 'string',
         'image' => 'string',
      ]);
      Post::create($data);
      return redirect()->route('post.index');
   }


   public function show(Post $post)
   {
      return view('post.show', compact('post'));
   }


   public function edit(Post $post)
   {
      return view('post.edit', compact('post'));
   }


   public function update(Post $post)
   {
      $data = request()->validate([
         'title' => 'string',
         'content' => 'string',
         'image' => 'string',
      ]);
      $post->update($data);
      return redirect()->route('post.show', $post->id);
   }

   public function destroy(Post $post)
   {
      $post->delete();
      return redirect()->route('post.index');
   }
}





//    public function delete()     //софт удаление с использованием трейта в модели
//    {
//       $post = Post::find(4);
//       $post->delete();
//       dd('deleted');
//       // $post = Post::withTrashed()->find(2);         //восстановление после софт удаления
// //  $post->restore();
// // dd('restored');
//    }
//    public function firstOrCreate()         //firstOrCreate        проверит, если есть пропустит, если нет, создаст
//    {
//       $post = Post::firstOrCreate(
//          [
//             'title' => 'some title phpshtorm'
//          ],
//          [
//             'title' => 'some title phpshtorm',
//             'content' => 'some some interesting cintent',
//             'image' => 'some blabla.jpg',
//             'likes' => 50000,
//             'is_published' => 1,
//          ]
//       );
//       dump($post->content);
//       dd('finished');
//    }



//    public function updateOrCreate()          //updateOrCreate      проверит, если есть, обновляет только те атрибуты, которые отличаются, если нет создаст
//    {
//       $anotherPost = [
//          'title' => 'some title not phpshtorm',
//          'content' => 'some interesting cintent',
//          'image' => 'updateorcreatee blabla.jpg',
//          'likes' => 500,
//          'is_published' => 0,
//       ];
//       $post = Post::updateOrCreate(['title' => 'some title not phpshtorm'], $anotherPost);
//       dump($post->title);
//       dd('finished');
//    }
// }
