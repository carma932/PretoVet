<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public function reserva_productos(){
        return $this->hasMany(Reserva_productos::class);
    }
}