<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\User;
use App\Models\Mascotas;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CitasController extends Controller
{
    public function index()
    {
        return view('citas.citas');
    }

    public function create()
    {
        $medicos = User::whereHas('rol', function ($q) {
            $q->where('nombre_rol', 'Medico');
        })->where('estado', 1)->orderBy('name')->get();

        $mascotas = Mascotas::where('estado', 1)->orderBy('nombre')->get();

        return view('citas.create_cita', compact('medicos', 'mascotas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha_cita' => 'required|date|after_or_equal:today',
            'hora_cita' => 'required',
            'motivo' => 'required|string|max:255',
            'mascota_id' => 'required|exists:mascotas,id',
            'medico_id' => 'required|exists:users,id',
        ]);

        try {
            $cita = new Citas();
            $cita->codigo = (string) Str::uuid();
            $cita->fecha_cita = $request->fecha_cita;
            $cita->hora_cita = $request->hora_cita;
            $cita->estado = 'Pendiente';
            $cita->motivo = $request->motivo;
            $cita->user_id = auth()->id();
            $cita->mascota_id = $request->mascota_id;
            $cita->medico_id = $request->medico_id;
            $cita->save();

            return redirect()->route('citas.index')->with('success', 'Cita registrada correctamente');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    }

    public function edit($codigo)
    {
        $cita = Citas::where('codigo', $codigo)->first();

        $medicos = User::whereHas('rol', function ($q) {
            $q->where('nombre_rol', 'Medico');
        })->where('estado', 1)->orderBy('name')->get();

        $mascotas = Mascotas::where('estado', 1)->orderBy('nombre')->get();

        return view('citas.edit_cita', compact('cita', 'medicos', 'mascotas'));
    }

    public function update(Request $request, $codigo)
    {
        $request->validate([
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required',
            'motivo' => 'required|string|max:255',
            'mascota_id' => 'required|exists:mascotas,id',
            'medico_id' => 'required|exists:users,id',
            'estado' => 'required|in:Pendiente,Confirmada,Cancelada',
        ]);

        try {
            $cita = Citas::where('codigo', $codigo)->first();
            $cita->fecha_cita = $request->fecha_cita;
            $cita->hora_cita = $request->hora_cita;
            $cita->motivo = $request->motivo;
            $cita->mascota_id = $request->mascota_id;
            $cita->medico_id = $request->medico_id;
            $cita->estado = $request->estado;
            $cita->save();

            return redirect()->route('citas.index')->with('success', 'Cita actualizada correctamente');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    }

    public function cancelar(Citas $cita)
    {
        $cita->estado = 'Cancelada';
        $cita->save();

        return redirect()->route('citas.index')->with('success', 'Cita cancelada correctamente');
    }
}