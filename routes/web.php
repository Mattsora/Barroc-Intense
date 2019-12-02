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

Route::get('/storingaanvraag', function () {
    return view('storingaanvraag');
});

Route::resource('offerte', 'offerteController');

Route::get('privacy', function () {
    return view('privacy');
});


 Route::get('create-reciept', function () {
    return view('privacy');
});

Route::get('login', function () {
    return view('auth/login');
});


Route::resource('sales', 'SalesController');
Route::resource('notes', 'NotesController');
Route::resource('quotations', 'quotationsController');
Route::resource('purchase', 'purchaseController');
Route::resource('product', 'ProductsController');
Route::resource('reciept', 'RecieptController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reciept-create', 'RecieptController@store');

Route::get('/', function (){
    return view('welcome');
});

Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');

