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



Route::get('/offerte', function () {
    return view('offerte');
});

Route::resource('offerte', 'offerteController');

Route::get('erroroverview', function () {
    return view('erroroverview');
});

Route::get('privacy', function () {
    return view('privacy');
});

Route::resource('sales', 'SalesController');
Route::resource('notes', 'NotesController');
Route::resource('quotations', 'quotationsController');
Route::resource('purchase', 'purchaseController');

Route::resource('error', 'errorController');
Route::get('erroroverview', 'errorController@erroroverview')->name('error.erroroverview');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function (){
    return view('welcome');
});

Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
