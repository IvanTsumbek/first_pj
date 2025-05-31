<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {    return 'hello';});

Route::get('/posts', 'App\Http\Controllers\PostController@index');
Route::get('/test', 'App\Http\Controllers\TestController@index');
