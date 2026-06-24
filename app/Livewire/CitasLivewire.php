<?php

namespace App\Livewire;

use App\Models\Citas;
use App\Models\User;
use Livewire\Component;

class CitasLivewire extends Component
{
    public $search = '';
    public $medico_filtro = '';

    public function render()
    {
        $medicos = User::whereHas('rol', function ($q) {
            $q->where('nombre_rol', 'Medico');
        })->orderBy('name')->get();

        $query = Citas::with(['medico', 'cliente', 'mascota'])
            ->when($this->search, function ($q) {
                $q->where('motivo', 'like', '%' . $this->search . '%');
            })
            ->when($this->medico_filtro, function ($q) {
                $q->where('medico_id', $this->medico_filtro);
            })
            ->orderBy('fecha_cita', 'asc');

        $citasPorMedico = $query->get()->groupBy(function ($cita) {
            return $cita->medico->name ?? 'Sin médico asignado';
        });

        return view('livewire.citas-livewire', compact('citasPorMedico', 'medicos'));
    }
}