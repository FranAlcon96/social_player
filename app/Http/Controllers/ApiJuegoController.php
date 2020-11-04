<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juego;

class ApiJuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegos = Juego::all();
        return $juegos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $juego = new Juego();

        $juego->nombre = $request->nombre;
        $juego->desarrollador = $request->desarrollador;
        $juego->anio = $request->anio;
        $juego->genero = $request->genero;
        $juego->plataformas = $request->plataformas;
        $juego->opiniones = 0;
        $juego->puntuacion_media = 0;
        $juego->imagen = 'game_default.jpg';

        if ($request->hasFile('imagen')) {
            $path = Storage::disk('public')->put('img',$request->file('imagen'));
            $juego->imagen = $path;
            //$juego->save();
        }

        $juego -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juego = Juego::findOrFail($id);
        return $juego;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $juego = Juego::findOrFail($request->id);

        $juego->nombre = $request->nombre;
        $juego->desarrollador = $request->desarrollador;
        $juego->anio = $request->anio;
        $juego->genero = $request->genero;
        $juego->plataformas = $request->plataformas;
        $juego->opiniones = 0;
        $juego->puntuacion_media = 0;

        if ($request->hasFile('imagen')) {
            $path = Storage::disk('public')->put('img',$request->file('imagen'));
            $juego->imagen = $path;
        }

        $juego -> save();
        return $juego;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $juego = Juego::destroy($id);
        return response()->json(null,204);
    }
}
