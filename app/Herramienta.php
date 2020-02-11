<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    protected $table = 'catalogo_herramientas';

    public function estado()
    {
        return $this->hasOne('App\Estado', 'estado');
    }
}
