<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participa extends Model
{
    protected $table = 'participa';
    protected $fillable =['id','id_equipo','id_torneo','miembros'];

       public function equipo()
	  {
	    return $this->belongsTo(Equipo::class,'id_equipo');
	  }
}
