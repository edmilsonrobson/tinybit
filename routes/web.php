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
    return view('front-page');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/short-urls', 'ShortUrlController@store');

Route::get('/statistics/{token}', 'StatisticsController@show');

/* Redirect url */
Route::get('/{token}', 'ShortUrlController@redirect');

