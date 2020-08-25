<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'homeController@index');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/temp', function () {
    return view('temp');
});

Route::get('temp/{id}', 'TempController@temp');



//-----controller------//
// trang temp theo loại:
Route::get('categories/{id_temp}', 'TemptheoloaiController@temptheoloai');

Route::get('/#{id_temp}', 'homeController@temphome');

