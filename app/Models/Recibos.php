<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recibos extends Model
{
    public function pago(){
        return $this->belongsTo(Pagos::class);
    }
}