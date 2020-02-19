<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
  protected $guarded = [];


	protected $fillable = [
        'descripcion', 'marca', 'created_at', 'update_at',
    ];
	 
	 public function marca()
    {
        return $this->hasOne('App\Marca', 'marcas');
    }

    //
}
