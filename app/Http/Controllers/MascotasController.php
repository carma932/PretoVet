<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MascotasController extends Controller
{
    //
    public function index()
    {
        return view('mascotas.mascotas');
    }
}
