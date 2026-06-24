<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascotas;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class MascotasController extends Controller
{
    public function index()
    {
        return view('mascotas.mascotas');
    }

    public function create()
    {
        $usuarios = User::where('estado', 1)->orderBy('name')->get();
        return view('mascotas.create_mascota', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|min:2|max:45',
            'especie' => 'required|string|max:45',
            'raza' => 'required|string|max:45',
            'sexo' => 'required|in:Macho,Hembra',
            'fecha_nacimiento' => 'required|date|before:today',
            'color' => 'required|string|max:30',
            'peso' => 'required|numeric|min:0',
            'condiciones_especiales' => 'nullable|string|max:100',
            'user_id' => 'required|exists:users,id',
        ]);

        try {
            $mascota = new Mascotas();
            $mascota->codigo = (string) Str::uuid();
            $mascota->nombre = $request->nombre;
            $mascota->especie = $request->especie;
            $mascota->raza = $request->raza;
            $mascota->sexo = $request->sexo;
            $mascota->fecha_nacimiento = $request->fecha_nacimiento;
            $mascota->color = $request->color;
            $mascota->peso = $request->peso;
            $mascota->condiciones_especiales = $request->condiciones_especiales;
            $mascota->estado = true;
            $mascota->user_id = $request->user_id;
            $mascota->save();

            return redirect()->route('mascotas.index')->with('success', 'Mascota registrada correctamente');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    }

    public function edit($codigo)
    {
        $mascota = Mascotas::where('codigo', $codigo)->first();
        $usuarios = User::where('estado', 1)->orderBy('name')->get();
        return view('mascotas.edit_mascota', compact('mascota', 'usuarios'));
    }

    public function update(Request $request, $codigo)
    {
        $request->validate([
            'nombre' => 'required|string|min:2|max:45',
            'especie' => 'required|string|max:45',
            'raza' => 'required|string|max:45',
            'sexo' => 'required|in:Macho,Hembra',
            'fecha_nacimiento' => 'required|date|before:today',
            'color' => 'required|string|max:30',
            'peso' => 'required|numeric|min:0',
            'condiciones_especiales' => 'nullable|string|max:100',
            'user_id' => 'required|exists:users,id',
        ]);

        try {
            $mascota = Mascotas::where('codigo', $codigo)->first();
            $mascota->nombre = $request->nombre;
            $mascota->especie = $request->especie;
            $mascota->raza = $request->raza;
            $mascota->sexo = $request->sexo;
            $mascota->fecha_nacimiento = $request->fecha_nacimiento;
            $mascota->color = $request->color;
            $mascota->peso = $request->peso;
            $mascota->condiciones_especiales = $request->condiciones_especiales;
            $mascota->user_id = $request->user_id;
            $mascota->save();

            return redirect()->route('mascotas.index')->with('success', 'Mascota actualizada correctamente');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    }

    public function disable(Mascotas $mascota)
    {
        $mascota->estado = 0;
        $mascota->save();

        return redirect()->route('mascotas.index')->with('success', 'Mascota inhabilitada correctamente');
    }

    public function enable(Mascotas $mascota)
    {
        $mascota->estado = 1;
        $mascota->save();

        return redirect()->route('mascotas.index')->with('success', 'Mascota habilitada correctamente');
    }
}