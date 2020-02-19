<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
	protected $guarded = [];

	 
	 public function estado()
    {
        return $this->hasOne('App\Estado', 'estado');
    }
    
}
