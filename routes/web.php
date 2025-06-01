<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {    return 'hello';});

Route::get('/posts', 'App\Http\Controllers\PostController@index');
Route::get('/posts/create', 'App\Http\Controllers\PostController@create');
