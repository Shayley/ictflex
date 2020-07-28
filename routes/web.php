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

Route::get('/over', function () {
    return view('/pages/about/about');
});

Route::get('/admin', function () {
    return view('/pages/panel/admin');
});

Route::get('/admin/panel', function () {
    return view('/pages/panel/panel');
});

Route::get('/mededelingen', function () {
    return view('/pages/announcements/announce');
});


Route::get('home/mededelingen', ['uses' => '\App\Http\Controllers\AnnounceController@index' ]);

Route::get('/home/mededelingen/create', ['uses' => '\App\Http\Controllers\AnnounceController@create']);

Route::post('/home/mededelingen/storeAnnouncement', ['uses' => '\App\Http\Controllers\AnnounceController@storeAnnouncement']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', ['uses' => '\App\Http\Controllers\FrontendController@index']);

Route::get('/mededelingen', ['uses' => '\App\Http\Controllers\AnnounceFrontController@index']);


