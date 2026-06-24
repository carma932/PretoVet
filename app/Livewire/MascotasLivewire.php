<?php

namespace App\Livewire;

use App\Models\Mascotas;
use Livewire\Component;

class MascotasLivewire extends Component
{
    public $search;

    public function render()
    {
        $mascotas = Mascotas::with('user')
            ->select('id', 'codigo', 'nombre', 'especie', 'raza', 'sexo', 'color', 'peso', 'estado', 'user_id')
            ->where('nombre', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.mascotas-livewire', compact('mascotas'));
    }
}