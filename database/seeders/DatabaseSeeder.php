<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear el ADMINISTRADOR PRINCIPAL
        User::factory()->create([
            'name' => 'Yuri',
            'email' => 'aqpyuri20081@gmail.com', // O el correo que tú quieras usar
            'password' => Hash::make('Montescoli3'), // Contraseña inicial (cámbiala luego)
            'role' => 'admin',  
        ]);

        // Opcional: Crear usuarios de prueba adicionales si quieres
        // User::factory(5)->create(); 
    }
}