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
Route::get('/crearGrupo','GrupoController@create')->name('crearGrupo');
Route::get('/grupo/show/{id}/{id_usuario}','GrupoController@show')->name('grupo');
Route::post('/crearGrupo/{id_usuario}','GrupoController@store')->name('storeGrupo');
Route::get('/grupo/membresia/{id_juego}/{id_usuario}','GrupoController@membresia')->name('membresia');
Route::get('/grupo/abandonar/{id_juego}/{id_usuario}','GrupoController@abandonar')->name('membresiaAbandonar');

Route::post('/mensajes/store/{id_grupo}/{id_usuario}','MensajeController@store')->name('crearMensaje');

Route::post('/opiniones/store/{id_juego}/{id_usuario}','OpinionController@store')->name('crearOpinion');

Route::get('/sesion','UserController@create')->name('sesion')->middleware('guest');
Route::get('/editUser/{id}','UserController@edit')->name('editUser');
Route::post('/updateUser/{id}','UserController@update')->name('updateUser');
Route::post('login','UserController@login')->name('login');
Route::post('registro','UserController@store')->name('registro');
Route::post('logout','UserController@logout')->name('logout');
Route::get('perfil/{id}','UserController@show')->name('perfil');

Route::get('mensajes/{id}/like', 'MensajeController@like')->name('mensajes.like');
Route::get('mensajes/{id}/unlike', 'MensajeController@unlike')->name('mensajes.unlike');
Route::get('mensajes/{id}/dislike', 'MensajeController@dislike')->name('mensajes.dislike');
Route::get('mensajes/{id}/undislike', 'MensajeController@undislike')->name('mensajes.undislike');
Route::get('/eliminarComentario/{id}','MensajeController@destroy')->name('eliminarComentario');

Route::get('/gestionOpiniones','OpinionController@index')->name('gestionOpiniones');
Route::get('/eliminarOpinion/{id}','OpinionController@destroy')->name('eliminarOpinion');
Route::get('/editarOpinion/{id}','OpinionController@edit')->name('editarOpinion');
Route::post('/updateOpinion/{id}','OpinionController@update')->name('updateOpinion');

Route::get('/listarTorneos','TorneoController@index')->name('listarTorneos');
Route::get('/crearTorneo','TorneoController@create')->name('crearTorneo');
Route::post('/crearTorneo','TorneoController@store')->name('storeTorneo');
Route::get('/torneo/{id}','TorneoController@show')->name('torneo');

Route::get('/listaEquipos','EquipoController@index')->name('listaEquipos');
Route::get('/crearEquipo','EquipoController@create')->name('crearEquipo');
Route::post('/storeEquipo','EquipoController@store')->name('storeEquipo');
Route::get('/editarEquipo','EquipoController@edit')->name('editarEquipo');
