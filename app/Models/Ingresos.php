<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingresos extends Model
{
    public function pago(){
        return $this->belongsTo(Pagos::class);
    }
}