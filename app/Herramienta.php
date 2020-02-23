<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    protected $guarded = [];

    public function estado() {
        return $this->belongsTo('App\Estado');
    }
}
