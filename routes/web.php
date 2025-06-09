<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;

Route::get('/', function () {return 'hello';});

Route::get('/posts', IndexController::class)->name('post.index');
Route::get('/posts/create', CreateController::class)->name('post.create');
Route::post('/posts', StoreController::class)->name('post.store');
Route::get('/posts/{post}', ShowController::class)->name('post.show');
Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
Route::delete('/posts/{post}', DestroyController::class)->name('post.destroy');
Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');

// Route::group(['namespace' => 'Post'], function(){
//     Route::get('/posts', 'IndexController')->name('post.index');
//     Route::get('/posts/create', 'CreateController')->name('post.create');
//     Route::post('/posts', 'StoreController')->name('post.store');
//     Route::get('/posts/{post}', 'ShowController')->name('post.show');
//     Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
//     Route::delete('/posts/{post}', 'DestroyController')->name('post.destroy');
//     Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
// });


// Route::get('/posts/update', 'App\Http\Controllers\PostController@update');
// Route::get('/posts/delete', 'App\Http\Controllers\PostController@delete');
// Route::get('/posts/first_or_create', 'App\Http\Controllers\PostController@firstOrCreate');
// Route::get('/posts/update_or_create', 'App\Http\Controllers\PostController@updateOrCreate');

Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');
Route::get('/contacts', 'App\Http\Controllers\ContactController@index')->name('contact.index');

