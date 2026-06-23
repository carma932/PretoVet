<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Egresos extends Model
{
    public function egreso_productos(){
        return $this->hasMany(EgresoProductos::class);
    }
}