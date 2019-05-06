<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $table = 'opinion';
    protected $fillable = [
        'id', 'id_usuario', 'id_juego','titulo','texto','puntuacion'
    ];
}
