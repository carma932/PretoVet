<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'codigo'    => (string) Str::uuid(),
            'name'      => 'Juan',
            'paterno'   => 'Perez',
            'materno'   => 'Lopez',
            'email'     => 'juan@gmail.com',
            'password'  => Hash::make('password123'),
            'telefono'  => '5551234567',
            'direccion' => 'Calle Falsa 123',
            'n_identificacion' => '1234567890',
        ]);
    }
}
