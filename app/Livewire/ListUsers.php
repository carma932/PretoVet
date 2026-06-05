<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ListUsers extends Component
{
    public $search;
    public function render()
    {
        $users = User::select('codigo', 'name', 'paterno', 'materno', 'email', 'telefono','n_identificacion', 'estado')
        ->where('n_identificacion', 'like', '%' . $this->search . '%')
        ->get();
        return view('livewire.list-users',compact('users'));

    }
}
