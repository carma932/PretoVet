<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'codigo',
        'name',
        'tipo',
        'stock',
        'precio',
        'estado'
    ];

    public function reservaProductos()
    {
        return $this->hasMany(ReservaProducto::class);
    }
}