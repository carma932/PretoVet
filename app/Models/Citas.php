<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function mascota(){
        return $this->belongsTo(Mascotas::class);
    }
}