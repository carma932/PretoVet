<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        Roles::insert([
            ['nombre_rol' => 'Admin'],
            ['nombre_rol' => 'Medico'],
            ['nombre_rol' => 'Cliente'],
        ]);
    }
}