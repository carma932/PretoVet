<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    //Relacion de muchos a uno 
    //hasOne es de uno a uno 
    public function user(){
        return $this->belongsTo(User::class);
    }
  
}
