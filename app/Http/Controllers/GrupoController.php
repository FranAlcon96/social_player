<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;
use App\Juego;
use DB;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$grupos = Grupo::latest()->paginate(9);
        $grupos = DB::table('grupo')
        ->join('usuario', 'grupo.id_usuario', '=', 'usuario.id')
        ->join('juego','grupo.id_juego','=','juego.id')
        ->select('grupo.nombre', 'grupo.imagen', 'grupo.miembros', 'grupo.created_at','usuario.usuario', 'juego.nombre AS titulo','grupo.descripcion')
        ->paginate(9);

        return view('comunidad.listaGrupos',compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $juegos = Juego::all();
        return view('comunidad.crearGrupo',compact('juegos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id_usuario)
    {
       request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'id_juego' => 'required'
        ]);

        $grupo =  Grupo::create([
            'id_usuario' => $id_usuario,
            'id_juego' => request('id_juego'),
            'descripcion' => request('descripcion'),
            'nombre' => request('nombre'),
            'miembros' => 0
        ]);

        return redirect()->route('grupos');
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
