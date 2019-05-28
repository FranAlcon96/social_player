<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Solicitud;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(Request $request, $id_equipo,$id_usuario)
    {
        $comprobar = Solicitud::where('id_equipo','=',$id_equipo)
            ->where('id_usuario','=',$id_usuario)
            ->where('estado','!=','rechazada')
            ->count();
        if ($comprobar!=0) {
            return "error, el usuario ya tiene una solicitud";
        }

        $solicitud = new Solicitud;
        $solicitud->id_usuario = $id_usuario;
        $solicitud->id_equipo = $id_equipo;
        $solicitud->estado = 'pendiente';
        $solicitud->save();
        return redirect(route('showEquipo',[$id_equipo]));
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

    public function aceptarSolicitud(Request $request, $id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->estado = 'aceptada';
        $solicitud->save();
        return back();
    }

    public function rechazarSolicitud(Request $request, $id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->estado = 'rechazada';
        $solicitud->save();
        return back();
    }


}
