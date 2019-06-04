<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/grupo/{$id}', function () {
    return view('comunidad.grupo');
})->name('grupo');

Route::get('/listaJuegos','JuegoController@index')->name('juegos');
Route::get('/show/{id}','JuegoController@show')->name('juego')->middleware('comprobarSesion');

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
Route::get('/editarTorneo/{id}','TorneoController@edit')->name('editarTorneo');
Route::post('/updateTorneo/{id}','TorneoController@update')->name('updateTorneo');
Route::post('/eliminarTorneo/{id}','TorneoController@destroy')->name('eliminarTorneo');
Route::get('/torneo/{id}','TorneoController@show')->name('torneo');
Route::get('/gestionTorneos','TorneoController@listarTorneos')->name('gestionTorneos');
Route::get('/administrarTorneo/{id}','TorneoController@administrarTorneo')->name('administrarTorneo');
Route::post('/hacerRonda/{id}','TorneoController@crearRonda')->name('hacerRonda');
Route::get('/deleteRonda/{id}','TorneoController@deleteRonda')->name('deleteRonda');
Route::get('/ganaLocal/{id}','TorneoController@ganarRondaLocal')->name('ganarRondaLocal');
Route::get('/ganaVisitante/{id}','TorneoController@ganarRondaVisitante')->name('ganarRondaVisitante');

Route::get('/listaEquipos','EquipoController@index')->name('listaEquipos');
Route::get('/showEquipo/{id}','EquipoController@show')->name('showEquipo');
Route::get('/crearEquipo','EquipoController@create')->name('crearEquipo');
Route::post('/storeEquipo','EquipoController@store')->name('storeEquipo');
Route::get('/editarEquipo/{id}','EquipoController@edit')->name('editarEquipo');
Route::get('/deleteEquipo/{id}','EquipoController@destroy')->name('deleteEquipo');
Route::get('/filtroUsuarios/{filtro?}','EquipoController@filtroUsuarios')->name('filtroUsuarios');

Route::get('/enviarSolicitud/{id_equipo}/{id_usuario}','SolicitudController@store')->name('enviarSolicitud');
Route::get('/aceptarSolicitud/{id}','SolicitudController@aceptarSolicitud')->name('aceptarSolicitud');
Route::post('/agregarParticipante/{id_torneo}','TorneoController@agregarParticipante')->name('agregarParticipante');
