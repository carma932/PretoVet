<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_Pago extends Model
{
    public function pagos(){
        return $this->hasMany(Pagos::class);
    }
}