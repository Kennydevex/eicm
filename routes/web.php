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


/*Route::namespace('System')->group(function () {
    Route::get('/teste1', 'LoginController@index');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/test', 'teste');
Route::view('/testhome', '_frontend.home');
