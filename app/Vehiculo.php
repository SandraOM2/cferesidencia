<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $guarded = [];

    public function estado() {
        return $this->belongsTo('App\Estado');
    }

    public function marca() {
        return $this->belongsTo('App\Marca');
    }

    public function modelo() {
        return $this->belongsTo('App\Modelo');
    }
}
