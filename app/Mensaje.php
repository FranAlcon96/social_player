<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table = 'mensaje';
    protected $fillable = ['id','id_usuario','id_grupo','texto'];
}
