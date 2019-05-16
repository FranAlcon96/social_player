<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensaje;

class MensajeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id_grupo,$id_usuario)
    {
        $mensaje =  Mensaje::create([
            'id_grupo' => $id_grupo,
            'id_usuario' => $id_usuario,
            'texto' => request('texto'),
        ]);
        return redirect(route('grupo',[$id_grupo,$id_usuario]));
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

public function like($id)
    {
        $post = Mensaje::find($id);
        $post->like();

        return back();
    }

public function unlike($id)
    {
        $post = Mensaje::find($id);
        $post->unlike();

        return back();
    }

public function dislike($id)
    {
        $post = Mensaje::find($id);
        $post->dislike();

        return back();
    }

public function undislike($id)
    {
        $post = Mensaje::find($id);
        $post->undislike();

        return back();
    }

}
