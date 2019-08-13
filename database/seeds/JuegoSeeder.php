<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('juego')->insert([
            'nombre' => 'League of Legends',
            'Desarrollador' => 'Riot Games',
            'anio' => 2009,
            'genero' => 'MOBA',
            'plataformas' => 'PC',
            'opiniones' => 0,
            'puntuacion_media' => 0,
            'imagen' => 'lol.jpg'
        ]);

            DB::table('juego')->insert([
            'nombre' => 'Heartstone',
            'Desarrollador' => 'Blizzard',
            'anio' => 2014,
            'genero' => 'Cartas',
            'plataformas' => 'PC',
            'opiniones' => 0,
            'puntuacion_media' => 0,
            'imagen' => 'heartstone.jpg'
        ]);

            DB::table('juego')->insert([
            'nombre' => 'Diablo III',
            'Desarrollador' => 'Blizzard',
            'anio' => 2012,
            'genero' => 'Rol',
            'plataformas' => 'Multiplataforma',
            'opiniones' => 0,
            'puntuacion_media' => 0,
            'imagen' => 'diablo3.jpg'
        ]);

            DB::table('juego')->insert([
            'nombre' => 'Heroes of the storm',
            'Desarrollador' => 'Blizzard',
            'anio' => 2015,
            'genero' => 'MOBA',
            'plataformas' => 'PC',
            'opiniones' => 0,
            'puntuacion_media' => 0,
            'imagen' => 'hots.jpg'
        ]);

            DB::table('juego')->insert([
            'nombre' => 'Jak and daxter: El legado de los precursores.',
            'Desarrollador' => 'Naughty dog',
            'anio' => 2001,
            'genero' => 'Aventura',
            'plataformas' => 'PS2',
            'opiniones' => 0,
            'puntuacion_media' => 0,
            'imagen' => 'jak.jpg'
        ]);

            DB::table('juego')->insert([
            'nombre' => 'Jak II: El renegado',
            'Desarrollador' => 'Naughty dog',
            'anio' => 2003,
            'genero' => 'Aventura',
            'plataformas' => 'PS2',
            'opiniones' => 0,
            'puntuacion_media' => 0,
            'imagen' => 'jak2.jpg'
        ]);

            DB::table('juego')->insert([
            'nombre' => 'Jak III',
            'Desarrollador' => 'Naughty dog',
            'anio' => 2005,
            'genero' => 'Aventura',
            'plataformas' => 'PS2',
            'opiniones' => 0,
            'puntuacion_media' => 0,
            'imagen' => 'jak3.jpg'
        ]);

            DB::table('juego')->insert([
            'nombre' => 'Resident Evil',
            'Desarrollador' => 'Capcom',
            'anio' => 1996,
            'genero' => 'Survival horror',
            'plataformas' => 'PSX',
            'opiniones' => 0,
            'puntuacion_media' => 0,
            'imagen' => 're.jpg'
        ]);

            DB::table('juego')->insert([
            'nombre' => 'Resident evil remake',
            'Desarrollador' => 'Capcom',
            'anio' => 2002,
            'genero' => 'Survival horror',
            'plataformas' => 'Gamecube',
            'opiniones' => 0,
            'puntuacion_media' => 0,
            'imagen' => 'ree.jpg'
        ]);

            DB::table('juego')->insert([
            'nombre' => 'Bioshock',
            'Desarrollador' => '2K Games',
            'anio' => 2007,
            'genero' => 'Acción',
            'plataformas' => 'Multiplataforma',
            'opiniones' => 0,
            'puntuacion_media' => 0,
            'imagen' => 'game_default.jpg'
        ]);

            DB::table('juego')->insert([
            'nombre' => 'Bioshock 2',
            'Desarrollador' => '2K Games',
            'anio' => 2005,
            'genero' => 'Acción',
            'plataformas' => 'Multiplataforma',
            'opiniones' => 0,
            'puntuacion_media' => 0,
            'imagen' => 'bioshock2.jpg'
        ]);

           DB::table('juego')->insert([
            'nombre' => 'Bioshock Infinite',
            'Desarrollador' => '2K Games',
            'anio' => 2013,
            'genero' => 'Acción',
            'plataformas' => 'Multiplataforma',
            'opiniones' => 0,
            'puntuacion_media' => 0,
            'imagen' => 'bioshock3.jpg'
        ]);
    }
}
