<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;
use App\Juego;
use App\MiembroGrupo;
use App\Mensaje;
use App\User;
use DB;
use Illuminate\Support\Facades\Storage;

class GrupoController extends Controller
{
    public function __construct(){
        $this->middleware('comprobarSesion');
    }
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
        ->select('grupo.nombre', 'grupo.imagen', 'grupo.miembros', 'grupo.created_at','usuario.usuario', 'juego.nombre AS titulo','grupo.descripcion','grupo.id')
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
            'miembros' => 0,
            'imagen' => 'img/game_default.jpg'
        ]);

        if ($request->hasFile('imagen')) {
            $path = Storage::disk('public')->put('img',$request->file('imagen'));
            $grupo->imagen = $path;
            $grupo->save();
        }

        return redirect()->route('grupos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_usuario)
    {
        $grupo = DB::table('grupo')
        ->join('usuario', 'grupo.id_usuario', '=', 'usuario.id')
        ->join('juego','grupo.id_juego','=','juego.id')
        ->select('grupo.nombre', 'grupo.imagen', 'grupo.miembros', 'grupo.created_at','usuario.usuario','grupo.id_usuario','juego.nombre AS titulo','grupo.descripcion','grupo.id')
        ->where('grupo.id','=',$id)
        ->first();

        $count = MiembroGrupo::where('id_grupo','=',$id)
            ->where('id_usuario','=',$id_usuario)
            ->count();

        $miembros = DB::table('miembro_grupo')
        ->join('usuario', 'miembro_grupo.id_usuario', '=', 'usuario.id')
        ->select('usuario.usuario','miembro_grupo.id_usuario','usuario.imagen')
        ->where('miembro_grupo.id_grupo','=',$id)
        ->get();

        $comentarios = Mensaje::with('usuario')->where('id_grupo','=',$id)->paginate(4);
        return view('comunidad.grupo',compact('grupo','count','miembros','comentarios'));
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

    public function membresia($id_grupo,$id_usuario){
        $miembro =  MiembroGrupo::create([
            'id_usuario' => $id_usuario,
            'id_grupo' => $id_grupo
        ]);
        return redirect(route('grupo',[$id_grupo,$id_usuario]));
    }

    public function abandonar($id_grupo,$id_usuario){
        $miembros = MiembroGrupo::where('id_grupo','=',$id_grupo)
            ->where('id_usuario','=',$id_usuario)
            ->delete();
        return redirect(route('grupo',[$id_grupo,$id_usuario]));
    }
}
