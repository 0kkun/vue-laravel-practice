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

Auth::routes();

Route::get('/', 'TopController@index')->name('top.index')->middleware('detectMobile');

Route::get('mobile/', 'MobileController@index')->name('mobile.index');

Route::post('login/guest', 'Auth\LoginController@guestLogin')->name('login.guest');