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
    return view('home');
});

Route::get('/offerte', function () {
    return view('offerte');
});

Route::resource('offerte', 'offerteController');

Route::get('privacy', function () {
    return view('privacy');
});

Route::get('login', function () {
    return view('auth/login');
});
Route::resource('sales', 'SalesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

