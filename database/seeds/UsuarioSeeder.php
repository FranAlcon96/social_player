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
            'edad' => 24,
            'email' => 'fran@gmail.com',
            'usuario' => 'franalcon96',
            'password' => $pass,
            'imagen' => 'img/user_default.jpg',
            'juego_favorito' => 'League of Legends'
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'Juan',
            'Apellidos' => 'Alcón',
            'edad' => 21,
            'email' => 'juan@gmail.com',
            'usuario' => 'darkjuan14',
            'password' => $pass,
            'imagen' => 'img/user_default.jpg',
            'juego_favorito' => 'League of Legends'
        ]);

    }
}
