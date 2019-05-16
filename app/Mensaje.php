<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cog\Likeable\Contracts\Likeable as LikeableContract;
use Cog\Likeable\Traits\Likeable;

class Mensaje extends Model implements LikeableContract
{
	use Likeable;

    protected $table = 'mensaje';
    protected $fillable = ['id','id_usuario','id_grupo','texto'];

	public function usuario()
	  {
	    return $this->belongsTo(User::class,'id_usuario');
	  }
}
