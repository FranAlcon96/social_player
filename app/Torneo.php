<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    protected $table = 'torneo';
    protected $fillable = ['id','id_juego','id_creador','nombre','equipos','rondas','inscripcion_cerrada','finalizado','imagen','texto'];
}
