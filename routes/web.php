<?php

use App\Http\Controllers\MyPlaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hello';
});

Route::get('/my_page', 'MyPlaceController@index');
Route::get('/contact', function () {
    return 'contact us';
});
Route::get('/about', function () {
    return 'this is page about our company';
});
Route::get('/serveces', function () {
    return 'our company is show a lot of option for you future bussiness';
});
Route::get('/support', function () {
    return 'we support you 24/7'; });
Route::get('/education', function () {
    return 'how to learn our corses?'; });