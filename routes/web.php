<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {    return 'hello';});

Route::get('/my_page', 'App\Http\Controllers\MyPlaceController@index');
Route::get('/contact', 'App\Http\Controllers\ContactController@index');
Route::get('/about', 'App\Http\Controllers\AboutController@index');
Route::get('/serveces', 'App\Http\Controllers\ServecesController@index');
Route::get('/support', 'App\Http\Controllers\SupportController@index');
Route::get('/education', 'App\Http\Controllers\EducationController@index'); 