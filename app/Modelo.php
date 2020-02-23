<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
  protected $guarded = [];
	 
	 public function marca()
    {
        return $this->belongsTo('App\Marca');
    }
    
    public function estado() {
        return $this->belongsTo('App\Estado');
    }
}
