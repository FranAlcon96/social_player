<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ronda extends Model
{
    protected $table = 'ronda';
    protected $fillable = ['id','id_equipo_local','id_equipo_visitante','id_torneo','ganador','perdedor','empate'];

    public function equipo_local()
	  {
	    return $this->belongsTo(Equipo::class,'id_equipo_local');
	  }

	  public function equipo_visitante()
	  {
	    return $this->belongsTo(Equipo::class,'id_equipo_visitante');
	  }

}
