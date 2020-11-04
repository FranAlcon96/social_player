<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* API REST JUEGOS */

Route::get('/juegos', 'ApiJuegoController@index');

Route::put('/juegos/actualizar/{id}', 'ApiJuegoController@update');

Route::post('/juegos/guardar', 'ApiJuegoController@store');

Route::delete('/juegos/borrar/{id}', 'ApiJuegoController@destroy');

Route::get('/juegos/buscar/{id}', 'ApiJuegoController@show');
