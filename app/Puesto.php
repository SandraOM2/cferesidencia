<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    public function estado() {
        return $this->belongsTo('App\Estado');
    }
}
