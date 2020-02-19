<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $guarded = [];

    public function estado()
    {
        return $this->hasOne('App\Estado', 'estado');
        return $this->hasOne('App\Marca', 'marca');
        return $this->hasOne('App\Modelo', 'modelo');
    }
}
