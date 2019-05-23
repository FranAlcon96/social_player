<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipo';
    protected $fillable = ['id','nombre','descripcion','logo','miembros','id_usuario','id_juego'];

        public function usuario()
	  {
	    return $this->belongsTo(User::class,'id_usuario');
	  }

	    public function juego()
	  {
	    return $this->belongsTo(Juego::class,'id_juego');
	  }
}
