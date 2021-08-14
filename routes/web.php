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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/select', 'HomeController@select')->name('select');
Route::get('/find', 'HomeController@find')->name('find');

Route::get('/yes', 'HomeController@yes')->name('yes');
Route::get('/false', 'HomeController@false')->name('false');

Route::get('/ending', function () {
    return view('ending');
});