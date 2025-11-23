<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    public function edit()
    {
        // Obtiene la primera configuración o crea una vacía si no existe
        $config = Configuration::firstOrNew();
        return view('admin.config', compact('config'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'direccion' => 'nullable|string',
            'email'     => 'nullable|email',
            'telefono'  => 'nullable|string',
            'whatsapp'  => 'nullable|string',
            'facebook'  => 'nullable|url',
        ]);

        $config = Configuration::firstOrNew();
        $config->fill($data);
        $config->save();

        return back()->with('ok', 'Configuración actualizada correctamente.');
    }
}