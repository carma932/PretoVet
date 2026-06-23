<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resetas extends Model
{
    public function detalle_resetas(){
        return $this->hasMany(Detalle_resetas::class);
    }
}