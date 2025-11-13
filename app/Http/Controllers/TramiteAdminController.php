<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tramite;
use Illuminate\Http\Request;

use App\Models\Tramite;
use Illuminate\Http\Request;

class TramiteAdminController extends Controller
{
    public function index(Request $request)
    {
        $tramites = Tramite::query()
            ->when($request->filled('estado'), fn($q) => $q->where('estado',$request->estado))
            ->when($request->filled('buscar'), function($q) use ($request){
                $b = $request->buscar;
                $q->where(function($x) use ($b){
                    $x->where('expediente','like',"%$b%")
                      ->orWhere('nombre','like',"%$b%")
                      ->orWhere('asunto','like',"%$b%");
                });
            })
            ->latest('fecha_recepcion')
            ->paginate(15)
            ->withQueryString();

        return view('admin.tramites.index', compact('tramites'));
    }

    public function updateEstado(Tramite $tramite, Request $request)
    {
        $request->validate(['estado' => 'required|in:recibido,derivado,observado,atendido']);
        $tramite->update(['estado' => $request->estado]);
        return back()->with('ok','Estado actualizado.');
    }
}


