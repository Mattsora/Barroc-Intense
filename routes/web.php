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

Route::get('/bkrcheck', function () {
    return view('bkrcheck');
});

Route::resource('bkrcheck', 'BkrController');

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

Route::get('login', function () {
    return view('auth/login');
});



Route::resource('sales', 'SalesController');
Route::resource('notes', 'NotesController');
Route::resource('quotations', 'quotationsController');
Route::resource('purchase', 'purchaseController');
Route::resource('purchaseBuy', 'purchaseBuyController');
Route::resource('finance', 'financeController');

Route::get('erroroverview', 'errorController@erroroverview')->name('error.erroroverview');
Route::get('financecontractoverview', 'financeController@financecontractoverview')->name('finance.finance   contractoverview');
Route::resource('error', 'errorController');
Route::resource('UserEdit', 'UserEditController');
Route::get('erroroverview', 'errorController@erroroverview')->name('error.erroroverview');
Route::resource('finance', 'financeController');
Auth::routes();


Route::resource('recipt', 'RecieptController');

Route::get('/reciept', 'RecieptController@index');
Route::get('/reciept-create','RecieptController@store');
Route::get('Maintenance/reciept', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/', function (){
    return view('welcome');
});

Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);



