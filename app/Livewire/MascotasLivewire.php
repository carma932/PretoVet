<?php

namespace App\Livewire;

use App\Models\Mascotas;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class MascotasLivewire extends Component
{
    use WithPagination;

    public $search = '';

    // Campos del formulario
    public $mascota_id;
    public $nombre;
    public $especie;
    public $raza;
    public $sexo;
    public $fecha_nacimiento;
    public $color;
    public $peso;
    public $condiciones_especiales;

    public $showModal = false;
    public $isEdit = false;

    protected $paginationTheme = 'tailwind';

    protected function rules()
    {
        return [
            'nombre' => 'required|string|min:2|max:45',
            'especie' => 'required|string|max:45',
            'raza' => 'required|string|max:45',
            'sexo' => 'required|in:Macho,Hembra',
            'fecha_nacimiento' => 'required|date|before:today',
            'color' => 'required|string|max:30',
            'peso' => 'required|numeric|min:0',
            'condiciones_especiales' => 'nullable|string|max:100',
        ];
    }

    public function render()
    {
        $mascotas = Mascotas::where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('codigo', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate(9);

        return view('livewire.mascotas-livewire', compact('mascotas'));
    }

    public function openCreate()
    {
        $this->resetForm();
        $this->isEdit = false;
        $this->showModal = true;
    }

    public function openEdit($id)
    {
        $mascota = Mascotas::findOrFail($id);

        $this->mascota_id = $mascota->id;
        $this->nombre = $mascota->nombre;
        $this->especie = $mascota->especie;
        $this->raza = $mascota->raza;
        $this->sexo = $mascota->sexo;
        $this->fecha_nacimiento = $mascota->fecha_nacimiento;
        $this->color = $mascota->color;
        $this->peso = $mascota->peso;
        $this->condiciones_especiales = $mascota->condiciones_especiales;

        $this->isEdit = true;
        $this->showModal = true;
    }

    public function save()
    {
        $this->validate();

        if ($this->isEdit) {
            $mascota = Mascotas::findOrFail($this->mascota_id);
            $mascota->update([
                'nombre' => $this->nombre,
                'especie' => $this->especie,
                'raza' => $this->raza,
                'sexo' => $this->sexo,
                'fecha_nacimiento' => $this->fecha_nacimiento,
                'color' => $this->color,
                'peso' => $this->peso,
                'condiciones_especiales' => $this->condiciones_especiales,
            ]);

            session()->flash('success', 'Mascota actualizada correctamente');
        } else {
            Mascotas::create([
                'codigo' => (string) Str::uuid(),
                'nombre' => $this->nombre,
                'especie' => $this->especie,
                'raza' => $this->raza,
                'sexo' => $this->sexo,
                'fecha_nacimiento' => $this->fecha_nacimiento,
                'color' => $this->color,
                'peso' => $this->peso,
                'condiciones_especiales' => $this->condiciones_especiales,
                'estado' => true,
                'user_id' => auth()->id(),
            ]);

            session()->flash('success', 'Mascota registrada correctamente');
        }

        $this->showModal = false;
        $this->resetForm();
    }

    public function toggleEstado($id)
    {
        $mascota = Mascotas::findOrFail($id);
        $mascota->estado = !$mascota->estado;
        $mascota->save();

        session()->flash('success', $mascota->estado ? 'Mascota habilitada' : 'Mascota inhabilitada');
    }

    public function delete($id)
    {
        Mascotas::findOrFail($id)->delete();
        session()->flash('success', 'Mascota eliminada correctamente');
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->mascota_id = null;
        $this->nombre = '';
        $this->especie = '';
        $this->raza = '';
        $this->sexo = '';
        $this->fecha_nacimiento = '';
        $this->color = '';
        $this->peso = '';
        $this->condiciones_especiales = '';
        $this->resetValidation();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}