<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function puesto(){
        return $this->belongsTo('App\Puesto');
    }

    public function estado(){
        return $this->belongsTo('App\Estado');
    }
}
