<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ProductosController extends Controller
{
    public function index()
    {
        return view('productos.productos');
    }

    public function create()
    {
        return view('productos.create_producto');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:100',
            'tipo' => 'required|in:Medicamento,Objetos,Comida',
            'stock' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
        ]);

        try {
            $producto = new Productos();
            $producto->codigo = (string) Str::uuid();
            $producto->name = $request->name;
            $producto->tipo = $request->tipo;
            $producto->stock = $request->stock;
            $producto->precio = $request->precio;
            $producto->estado = true;
            $producto->save();

            return redirect()->route('productos.index')->with('success', 'Producto registrado correctamente');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    }

    public function edit($codigo)
    {
        $producto = Productos::where('codigo', $codigo)->first();
        return view('productos.edit_producto', compact('producto'));
    }

    public function update(Request $request, $codigo)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:100',
            'tipo' => 'required|in:Medicamento,Objetos,Comida',
            'stock' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
        ]);

        try {
            $producto = Productos::where('codigo', $codigo)->first();
            $producto->name = $request->name;
            $producto->tipo = $request->tipo;
            $producto->stock = $request->stock;
            $producto->precio = $request->precio;
            $producto->save();

            return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    }

    public function disable(Productos $producto)
    {
        $producto->estado = 0;
        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto inhabilitado correctamente');
    }

    public function enable(Productos $producto)
    {
        $producto->estado = 1;
        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto habilitado correctamente');
    }
}