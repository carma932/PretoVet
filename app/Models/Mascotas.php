<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    protected $fillable = [
        'codigo', 'nombre', 'especie', 'raza', 'sexo',
        'fecha_nacimiento', 'color', 'peso',
        'condiciones_especiales', 'estado', 'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}