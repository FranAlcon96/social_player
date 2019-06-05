<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Juego;
use App\Solicitud;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
        $juegos = Juego::orderBy('nombre')->get();
        return view('users.login',compact('juegos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'email' => 'required',
            'usuario' => 'required',
            'password' => 'required',
            'juego_favorito' => 'required',
            'password-confirm' => 'required',
            'imagen' => 'image|max:1999'
        ]);

         $usuario =  User::create([
            'nombre' => $data['nombre'],
            'apellidos' => $data['apellidos'],
            'edad' => $data['edad'],
            'email' => $data['email'],
            'usuario' => $data['usuario'],
            'password' => Hash::make($data['password']),
            'juego_favorito' => $data['juego_favorito'],
            'imagen' => 'img/game_default.jpg'
        ]);

         if ($request->hasFile('imagen')) {
            $path = Storage::disk('public')->put('img',$request->file('imagen'));
            $usuario->imagen = $path;
            $usuario->save();
        }
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
        $user = User::find($id);
        $count_opiniones = DB::table('opinion')->where('id_usuario','=',$id)->count();
        $count_mensajes = DB::table('mensaje')->where('id_usuario','=',$id)->count();
        $solicitudes = Solicitud::where('id_usuario','=',$id)
            ->where('estado','=','pendiente')
            ->with('equipo')
            ->get();
        return view('users.profile',compact('user','count_opiniones','count_mensajes','solicitudes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $juegos = Juego::orderBy('nombre')->get();
        return view('users.editUser',compact('user','juegos'));
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
        //return $request->file('imagen');
        $user = User::find($id);
        $data = request()->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'email' => 'required',
            'usuario' => 'required',
            'juego_favorito' => 'required',
            'imagen' => 'image|max:1999'
        ]);

        if ($request->hasFile('imagen')) {
            $path = Storage::disk('public')->put('img',$request->file('imagen'));
            $user->imagen = $path;
        }
        $user->nombre = $data['nombre'];
        $user->apellidos = $data['apellidos'];
        $user->edad = $data['edad'];
        $user->email = $data['email'];
        $user->usuario = $data['usuario'];
        $user->juego_favorito = $data['juego_favorito'];
        $user->save();
        return redirect(route('perfil',[$id]));
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
