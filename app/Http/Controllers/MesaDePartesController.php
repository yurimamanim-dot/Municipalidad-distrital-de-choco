<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use App\Models\Adjunto;
use Illuminate\Http\Request;

class MesaDePartesController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => ['required', 'string', 'max:120'],
            'documento' => ['required', 'string', 'max:20'],
            'correo' => ['required', 'email', 'max:120'],
            'telefono' => ['nullable', 'string', 'max:30'],
            'tipo' => ['required', 'in:solicitud,reclamo,oficio,carta,otro'],
            'asunto' => ['required', 'string', 'max:200'],
            'descripcion' => ['nullable', 'string'],
            'archivos.*' => ['file', 'mimes:pdf,doc,docx,png,jpg,jpeg', 'max:10240'],
            'acepto' => ['accepted'],
        ]);

        // EXP-YYYY-xxxxx (interno)
        $anio = now()->year;
        $secuencial = str_pad((string) (Tramite::whereYear('created_at', $anio)->count() + 1), 5, '0', STR_PAD_LEFT);
        $expediente = "EXP-{$anio}-{$secuencial}";

        $tramite = Tramite::create([
            'nombre' => $data['nombre'],
            'documento' => $data['documento'],
            'correo' => $data['correo'],
            'telefono' => $data['telefono'] ?? null,
            'tipo' => $data['tipo'],
            'asunto' => $data['asunto'],
            'descripcion' => $data['descripcion'] ?? null,
            'expediente' => $expediente,
            'estado' => 'recibido',
            'canal' => 'web',
            'fecha_recepcion' => now(),
        ]);

        if ($request->hasFile('archivos')) {
            foreach ($request->file('archivos') as $file) {
                if (!$file)
                    continue;
                $dir = "tramites/{$expediente}";
                $storedPath = $file->store($dir, 'public');

                Adjunto::create([
                    'tramite_id' => $tramite->id,
                    'nombre_original' => $file->getClientOriginalName(),
                    'mime' => $file->getClientMimeType(),
                    'size' => $file->getSize(),
                    'path' => $storedPath,
                ]);
            }
        }

        // (Opcional) Mail a mesa@... aquí

        return redirect()
            ->route('mesa.confirmacion')
            ->with([
                'expediente' => $expediente,
                'nombre' => $data['nombre'],
                'correo' => $data['correo'],
            ]);

    }
}

