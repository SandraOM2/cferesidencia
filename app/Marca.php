<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
	protected $guarded = [];

    public function modelos() {
        return $this->hasMany('App\Modelo');
    }
	
    public function estado() {
        return $this->belongsTo('App\Estado');
    }
}
