<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class InicioController extends Controller
{
    public function index()
    {
        // Últimas 3 noticias marcadas como destacadas y publicadas
        $destacadas = Noticia::where('es_destacada', true)
            ->whereNotNull('publicado_en')
            ->orderByDesc('publicado_en')
            ->take(3)
            ->get();

        return view('inicio', compact('destacadas'));
    }
}
