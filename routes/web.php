<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/grupo/{$id}', function () {
    return view('comunidad.grupo');
})->name('grupo');

Route::get('/listaJuegos','JuegoController@index')->name('juegos');
Route::get('/show/{id}','JuegoController@show')->name('juego');

Route::get('/listaGrupos','GrupoController@index')->name('grupos');

Route::post('/opiniones/store/{id_juego}/{id_usuario}','OpinionController@store')->name('crearOpinion');

Route::get('/sesion', function () {
    return view('users.login');
})->name('sesion')->middleware('guest'); //he tocado el middleware

Route::post('login','UserController@login')->name('login');
Route::post('registro','UserController@store')->name('registro');
Route::post('logout','UserController@logout')->name('logout');
