<?php

namespace App\Livewire;

use App\Models\Productos;
use Livewire\Component;

class ProductosLivewire extends Component
{
    public $search = '';

    public function render()
    {
        $query = Productos::select('id', 'codigo', 'name', 'tipo', 'stock', 'precio', 'estado');

        if (!empty($this->search)) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        $productos = $query->get();

        return view('livewire.productos-livewire', compact('productos'));
    }
}