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
    return view('index');
})->name('index');

Route::get('/sesion', function () {
    return view('users.login');
})->name('sesion')->middleware('guest'); //he tocado el middleware

Route::post('login','UserController@login')->name('login');
Route::post('registro','UserController@store')->name('registro');
Route::post('logout','UserController@logout')->name('logout');
