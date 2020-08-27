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
// trang all temp:
Route::get('allcategories', 'AlltempController@tempall');

// trang temp theo loại:
Route::get('categories/{id_temp}', 'TemptheoloaiController@temptheoloai');

Route::post('/contact', 'GuimailController@guimaillienhe');



Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::group(['middleware' => ['auth','Quantri']], function () {
//     Route::resource('theloai', 'TheloaiController');
//     Route::resource('loaitin', 'LoaitinController');
//     Route::resource('tintuc', 'TintucController');
//     Route::resource('ykien', 'YkienController');
// });
// Route::get('/admin', function(){
//     return view('admin/dashboard');
// });

