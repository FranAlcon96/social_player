<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitud_equipo';
    protected $fillable = ['id','id_usuario','id_equipo','estado'];

     public function equipo()
	  {
	    return $this->belongsTo(Equipo::class,'id_equipo');
	  }
}
