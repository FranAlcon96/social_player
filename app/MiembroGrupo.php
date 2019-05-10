<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MiembroGrupo extends Model
{
    protected $table = 'miembro_grupo';
    protected $fillable = ['id','id_usuario','id_juego'];
}
