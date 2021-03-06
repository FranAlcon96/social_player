<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opinion;
use App\Juego;
use Illuminate\Support\Facades\Auth;
use DB;

class OpinionController extends Controller
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
        $opiniones = Opinion::where('id_usuario','=',Auth::id())->paginate();
        return view('comunidad.gestorOpiniones',compact('opiniones'));
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
    public function store(Request $request,$id_juego,$id_usuario)
    {
        request()->validate([
            'titulo' => 'required',
            'puntuacion' => 'required|max:10|min:1',
            'texto' => 'required|min:10'
        ]);

        $opinion =  Opinion::create([
            'id_usuario' => $id_usuario,
            'id_juego' => $id_juego,
            'titulo' => request('titulo'),
            'texto' => request('texto'),
            'puntuacion' => request('puntuacion'),
        ]);

        //calcular puntuación media
        $aux = DB::table('opinion')->get()->where('id_juego','=',$id_juego);
        $media = 0;
        $contador = 0;
        foreach ($aux as $p) {
            $media = $media + $p->puntuacion;
            $contador++;
        }
        $media = $media / $contador;

        //sumar opiniones al juego y añadir la media cada vez que se registre una opinión
        $juego = Juego::find($id_juego);
        $juego->opiniones = $juego->opiniones+1;
        $juego->puntuacion_media = $media;
        $juego->save();

        return redirect()->route('juego',[$id_juego]);
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
        $opinion = Opinion::find($id);
        return view('comunidad.editOpinion',compact('opinion'));
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
        $opinion = Opinion::find($id);
        request()->validate([
            'titulo' => 'required',
            'puntuacion' => 'required|max:10|min:1',
            'texto' => 'required|min:10'
        ]);

        $opinion->titulo = request('titulo');
        $opinion->puntuacion = request('puntuacion');
        $opinion->texto = request('texto');
        $opinion->save();

        return redirect(route('gestionOpiniones'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Opinion::destroy($id);
        return back();
    }
}
