<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    //Relacion de muchos a uno 
    //belongsTo es la relacion inversa (el "muchos" apunta al "uno")
    public function reserva_producto(){
        return $this->belongsTo(Reserva_productos::class);
    }

    public function tipo__pago(){
        return $this->belongsTo(Tipo_Pago::class);
    }
}