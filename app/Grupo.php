<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupo';
    protected $fillable = ['id','id_juego','id_usuario','nombre','miembros','descripcion','imagen'];

    public function scopeNombre($query, $name){
    	if ($name != "") {
    		$query->where('nombre',$name)
    			->orWhere('nombre', 'like', '%' . $name . '%');
    	}
    }
}