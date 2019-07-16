<?php

use Illuminate\Http\Request;
// use Illuminate\Routing\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'cors'], function () {
    route::resource('datasekolah', 'SekolahController');
    route::resource('siswa', 'SiswaController');
    route::resource('tag', 'Api\TagController');
    route::resource('kategori', 'Api\KategoriController');
    route::resource('artikel', 'Api\ArtikelController');
});
