<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Juego extends Model
{
	protected $table = 'juego';
	protected $fillable = [
        'id', 'nombre', 'desarrollador','anio','genero','plataformas','opiniones','puntuacion_media','imagen'
    ];
}
