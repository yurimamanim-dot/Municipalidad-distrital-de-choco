<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use Illuminate\Http\Request;

class TramiteAdminController extends Controller
{
    /**
     * Listar los trámites recibidos
     */
    public function index()
    {
        // Traemos todos los trámites, ordenados por el más reciente
        // No filtramos por rol porque Admin y Personal pueden verlos.
        $tramites = Tramite::with('adjuntos') // Cargamos los adjuntos por si los necesitamos
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.tramites.index', compact('tramites'));
    }

    /**
     * Actualizar el estado del trámite (Ej: Pendiente -> Atendido)
     */
    public function updateEstado(Request $request, Tramite $tramite)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,en_proceso,atendido,rechazado'
        ]);

        $tramite->update(['estado' => $request->estado]);

        return back()->with('ok', 'El estado del expediente ' . $tramite->numero_expediente . ' ha sido actualizado.');
    }
}