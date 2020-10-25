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

Route::get('/', 'UserController@index')->name('user.index');
Route::post('/', 'UserController@store')->name('user.store');
Route::post('/import', 'UserController@import')->name('user.import');
Route::delete('/{user}', 'UserController@destroy')->name('user.destroy');
Route::get('/{user}', 'UserController@certificate')->name('user.print');
