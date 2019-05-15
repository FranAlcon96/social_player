<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$pass = '123';
    	$pass = Hash::make($pass);
        DB::table('usuario')->insert([
            'nombre' => 'Fran',
            'Apellidos' => 'Alcón',
            'edad' => 23,
            'email' => 'fran@gmail.com',
            'usuario' => 'franalcon96',
            'password' => $pass,
            'juego_favorito' => 'League of Legends'
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'Lily',
            'Apellidos' => 'Villatoro',
            'edad' => 20,
            'email' => 'lily@gmail.com',
            'usuario' => 'lilyfujoshi',
            'password' => $pass,
            'juego_favorito' => 'League of Legends'
        ]);

    }
}
