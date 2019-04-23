<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/comunidad', function () {
    return view('comunidad.comunidad');
})->name('comunidad');

Route::get('/sesion', function () {
    return view('users.login');
})->name('sesion')->middleware('guest'); //he tocado el middleware

Route::post('login','UserController@login')->name('login');
Route::post('registro','UserController@store')->name('registro');
Route::post('logout','UserController@logout')->name('logout');
