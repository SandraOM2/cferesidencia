<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
  protected $guarded = [];
	 
	 public function marca()
    {
        return $this->hasOne('App\Marca', 'marcas');
    }

    //
}
