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
Route::get('/dashboard', 'AdminController@dashboard')->name('admin');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/email', 'AdminController@email')->name('admin');
Route::get('/chatapp', 'AdminController@chatapp')->name('admin');
Route::get('/calendar', 'AdminController@lich')->name('admin');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::group(['middleware' => ['auth','Quantri']], function () {
    Route::resource('/templateBE', 'TemplateAdminController');
    Route::resource('/temp_typeBE', 'Template_typeAdminController');
});