<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Juego;
use App\Opinion;
use DB;
use Carbon\Carbon;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegos = Juego::nombre(request()->get('nombre'))->paginate(7);
        return view('comunidad.listaJuegos', compact('juegos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juego = Juego::find($id);
        $opiniones = DB::table('opinion')
        ->where('id_juego','=',$id)
        ->join('usuario', 'opinion.id_usuario', '=', 'usuario.id')
        ->select('opinion.titulo', 'opinion.texto', 'opinion.puntuacion', 'opinion.created_at', 'opinion.updated_at', 'usuario.usuario','usuario.id as id_usuario')
        ->paginate(5);
        return view('comunidad.juego', compact('juego','opiniones'));
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
