<?php

namespace App\Http\Controllers;

use App\Juego;
use App\Torneo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TorneoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $juegos = Juego::all()->sortBy("nombre");
        return view('competitivo.crearTorneo',compact('juegos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'id_juego' => 'required',
            'imagen' => 'required',
            'texto' => 'required',
            'nombre' => 'required'
        ]);

        $torneo =  Torneo::create([
            'id_creador' => Auth::user()->id,
            'id_juego' => request('id_juego'),
            'nombre' => request('nombre'),
            'texto' => request('texto'),
            'imagen' => request('imagen'),
            'equipos' => 0,
            'inscripcion_cerrada' => 0,
            'finalizado' => 0
        ]);

        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
