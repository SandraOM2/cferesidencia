<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public function estado() {
        return $this->belongsTo('App\Estado');
    }

    public function marca() {
        return $this->belongsTo('App\Marca');
    }

    public function modelo() {
        return $this->belongsTo('App\Modelo');
    }

    public function getDescripcionAttribute() {
        return "{$this->marca->descripcion} {$this->modelo->descripcion} {$this->año}";
    }
}
