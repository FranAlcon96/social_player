<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
    public function store(Request $request)
    {
    //Debugbar::info($request);
        $data = request()->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'email' => 'required',
            'usuario' => 'required',
            'password' => 'required',
            'password-confirm' => 'required'
        ]);
        /*$datos['password'] = Hash::make($datosValidados['password']);
        $usuario = User::create($datos);*/
         $usuario =  User::create([
            'nombre' => $data['nombre'],
            'apellidos' => $data['apellidos'],
            'edad' => $data['edad'],
            'email' => $data['email'],
            'usuario' => $data['usuario'],
            'password' => Hash::make($data['password']),
            'juego_favorito' => 'League of Legends', //Cambiar más adelante cuando se añada los juegos

        ]);
        //faltaría lo de confirmar el registro con el correo.
        return redirect('/')->with('success', 'Usuario registrado correctamente.');
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

    public function login()
    {
        $datos = request()->validate([
                'usuario' => 'required',
                'password' => 'required',
            ]);

        if (Auth::attempt($datos)) {
            return view('index');
        }

        return view('users.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
