<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EgresoProductos extends Model
{
    public function producto(){
        return $this->belongsTo(Productos::class);
    }

    public function egreso(){
        return $this->belongsTo(Egresos::class);
    }
}