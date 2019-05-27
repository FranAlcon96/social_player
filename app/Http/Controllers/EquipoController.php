<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\Juego;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all()->where('id_usuario','=',Auth::user()->id);
        return view('competitivo.listaEquipos',compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $juegos = Juego::orderBy('nombre')->get();
        return view('competitivo.crearEquipo',compact('juegos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipo =  Equipo::create([
            'id_usuario' => Auth::user()->id,
            'id_juego' => request('id_juego'),
            'descripcion' => request('descripcion'),
            'nombre' => request('nombre'),
            'logo' => request('logo'),
            'miembros' => 0
        ]);
        return redirect()->route('listaEquipos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipo = Equipo::find($id);
        $users = User::all();
        return view('competitivo.showEquipo',compact('equipo','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        return view('competitivo.editEquipo',compact('equipo'));
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
        Equipo::destroy($id);
        return back();
    }

    public function filtroUsuarios($filtro)
    {
        $users = User::where('usuario', 'LIKE', "%{$filtro}%")->get();
        return json_encode($users);
    }
}
