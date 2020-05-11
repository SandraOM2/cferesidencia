<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    
    protected $dates = [
        'fecha_salida',
    ];

    public function Detalle()
    {
        return $this->belongsToMany('App\SalidaDetalle');
    }
}
