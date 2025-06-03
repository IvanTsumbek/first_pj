<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
$posts = Post::all();
return view('posts', compact('posts'));


      // $post = Post::find(1); //обращаемся к модели и ее методу и READ с базы по номеру id
      // dd($post);

      // $posts = Post::all();                //считываем все записи
      // foreach ($posts as $post){
      //    dump ($post->title);
      // }
      // dd($posts);
      // $posts = Post::where('is_published', 1)->get();      //считываем записи по атрибуту
      // dd($posts);

      // $post = Post::where('is_published', 0)->first();      //считываем первую запись по атрибуту
      // dump($post->title);
      // dd('end');
   }

   public function create()
   {
      $postsArr = [
         [
            'title' => 'phpshtorm',
            'content' => 'some interesting cintent',
            'image' => 'blabla.jpg',
            'likes' => 20,
            'is_published' => 1,
         ],
         [
            'title' => 'another phpshtorm',
            'content' => 'another some interesting cintent',
            'image' => 'another blabla.jpg',
            'likes' => 50,
            'is_published' => 1,
         ],
      ];
      foreach ($postsArr as $item) {
         Post::create($item);
      }
      dd('created');
   }

   public function update()
   {
      $post = Post::find(22);
      // dd($post->title);
      $post->update([
         'title' => 'updated',
         'content' => 'updated', //можно апдейтить только те атрибуты, которые нужно
         'image' => 'updated one more',
         // 'likes' => 1000,
         'is_published' => 0,
      ]);
      dd('updated');
   }

   public function delete()     //софт удаление с использованием трейта в модели
   {
      $post = Post::find(4);
      $post->delete();
      dd('deleted');
      // $post = Post::withTrashed()->find(2);         //восстановление после софт удаления
//  $post->restore();
// dd('restored');
   }

   public function firstOrCreate()         //firstOrCreate        проверит, если есть пропустит, если нет, создаст
   {
      $post = Post::firstOrCreate(
         [
            'title' => 'some title phpshtorm'
         ],
         [
            'title' => 'some title phpshtorm',
            'content' => 'some some interesting cintent',
            'image' => 'some blabla.jpg',
            'likes' => 50000,
            'is_published' => 1,
         ]
      );
      dump($post->content);
      dd('finished');
   }

   public function updateOrCreate()          //updateOrCreate      проверит, если есть, обновляет только те атрибуты, которые отличаются, если нет создаст
   {
      $anotherPost = [
         'title' => 'some title not phpshtorm',
         'content' => 'some interesting cintent',
         'image' => 'updateorcreatee blabla.jpg',
         'likes' => 500,
         'is_published' => 0,
      ];

      $post = Post::updateOrCreate(
         [
            'title' => 'some title not phpshtorm'
         ],
         $anotherPost
      );
      dump($post->title);
      dd('finished');
   }










}
