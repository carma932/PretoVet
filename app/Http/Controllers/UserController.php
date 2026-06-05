<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class UserController extends Controller
{
    public function index()
    {
       
        return view('users.view_user');
    }
    public function disable(User $user)
    {
        $user->estado = 0;
        $user->save();

        return redirect()->route('users.index') ->with('success', 'Usuario inhabilitado correctamente');
    }
    public function enable(User $user)
    {
        $user->estado = 1;
        $user->save();

        return redirect()->route('users.index') ->with('success', 'Usuario habilitado correctamente');
    }
    public function create()
    {
        return view('users.create_user');
    }
    public function store(Request $request)
    {
      //return $request;
      $request->validate([
            'name' => 'required|string|min:3|max:100',
            'paterno' => 'string|min:3|max:100',
            'materno' => 'string|min:3|max:100',
            'email' => 'required|email|max:150|unique:users,email',
            'telefono' => 'required|unique:users,telefono',
            'n_identificacion' => 'required',
            'direccion' => 'required',
            ]); 
            try {
                $user = new User();
                $user->codigo = (string) Str::uuid();
                $user->name = $request->name;
                $user->paterno = $request->paterno;
                $user->materno = $request->materno;
                $user->email = $request->email;
                $user->telefono = $request->telefono;
                $user->n_identificacion = $request->n_identificacion;
                $user->estado = true;
                $user->direccion = $request->direccion;
                $user->password = Hash::make($request ->n_identificacion."*"); 
                $user->save();
                return redirect()->route('users.index')->with('success', 'Usuario creado correctamente');
            } catch (ValidationException $e) {
                //dd($e);
                return redirect()->back()->withErrors($e->validator)->withInput();
            }

    }
    public function edit($codigo)
    {
        $user = User::where('codigo',$codigo)->first();
        return view('users.edith_user',compact('user'));
    }
    public function update(Request $request, $codigo)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:100',
            'paterno' => 'string|min:3|max:100',
            'materno' => 'string|min:3|max:100',
            'email' => 'required|email|max:150|unique:users,email,'.$codigo.',codigo',
            'telefono' => 'required|unique:users,telefono,'.$codigo.',codigo',
            'n_identificacion' => 'required',
            'direccion' => 'required',
        ]); 
        try {
            $user = User::where('codigo',$codigo)->first();
            $user->name = $request->name;
            $user->paterno = $request->paterno;
            $user->materno = $request->materno;
            $user->email = $request->email;
            $user->telefono = $request->telefono;
            $user->n_identificacion = $request->n_identificacion;
            $user->estado = true;
            $user->direccion = $request->direccion;
            $user->password = Hash::make($request ->n_identificacion."*"); 
            $user->save();
            return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente');
        } catch (ValidationException $e) {
            dd($e);
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    }
    
   
}
