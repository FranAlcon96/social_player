<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    protected $table = 'torneo';
    protected $fillable = ['id','id_juego','id_creador','nombre','equipos','rondas','inscripcion_cerrada','finalizado','imagen','texto'];

    public function usuario()
	  {
	    return $this->belongsTo(User::class,'id_creador');
	  }

	    public function juego()
	  {
	    return $this->belongsTo(Juego::class,'id_juego');
	  }
}
