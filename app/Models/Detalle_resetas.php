<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_resetas extends Model
{
    public function reseta(){
        return $this->belongsTo(Resetas::class);
    }
}