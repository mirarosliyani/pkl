<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/guides', function () {
    return view('guides');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/explained', function () {
    return view('explained');
});

Route::get('/icon', function () {
    return view('icon');
});

Route::get('/admin', function () {
    return view('welcome');
});
Route::resource('/admin/artikel', 'ArtikelController');
Route::resource('/admin/kategori', 'KategoriController');
Route::resource('/admin/tag', 'TagController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('siswa', 'SiswaController');
