<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    // ----------- PÚBLICO -----------

    public function indexPublica(Request $request)
    {
        $categoria = $request->query('categoria');

        $query = Noticia::query()
            ->whereNotNull('publicado_en')
            ->orderByDesc('publicado_en');

        if ($categoria && $categoria !== 'Todos') {
            $query->where('categoria', $categoria);
        }

        $noticias = $query->paginate(12)->withQueryString();

        // si todavía no usas filtros, puedes ignorar esto
        $categorias = ['Todos', 'Eventos', 'Obras', 'Seguridad', 'Salud', 'Educación'];

        return view('noticias.index', compact('noticias', 'categorias', 'categoria'));
    }

    public function showPublica(string $slug)
    {
        $noticia = Noticia::where('slug', $slug)->firstOrFail();

        return view('noticias.show', compact('noticia'));
    }

    // ----------- ADMIN -----------

    public function index()
    {
        $noticias = Noticia::orderByDesc('publicado_en')
            ->orderByDesc('created_at')
            ->paginate(15);

        return view('admin.noticias.index', compact('noticias'));
    }

    public function create()
    {
        $categorias = ['Eventos', 'Obras', 'Seguridad', 'Salud', 'Educación'];
        return view('admin.noticias.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);

        if ($request->hasFile('imagen_portada')) {
            $data['imagen_portada'] = $request->file('imagen_portada')->store('noticias', 'public');
        }

        $data['es_destacada'] = $request->boolean('es_destacada');

        Noticia::create($data);

        return redirect()->route('admin.noticias.index')
            ->with('success', 'Noticia creada correctamente.');
    }

    public function show(Noticia $noticia)
    {
        // si quieres, puedes usar la vista pública
        return view('noticias.show', compact('noticia'));
        // o crear una vista admin.noticias.show
    }

    public function edit(Noticia $noticia)
    {
        $categorias = ['Eventos', 'Obras', 'Seguridad', 'Salud', 'Educación'];
        return view('admin.noticias.edit', compact('noticia', 'categorias'));
    }

    public function update(Request $request, Noticia $noticia)
    {
        $data = $this->validateData($request);

        if ($request->hasFile('imagen_portada')) {
            $data['imagen_portada'] = $request->file('imagen_portada')->store('noticias', 'public');
        }

        $data['es_destacada'] = $request->boolean('es_destacada');

        $noticia->update($data);

        return redirect()->route('admin.noticias.index')
            ->with('success', 'Noticia actualizada correctamente.');
    }

    public function destroy(Noticia $noticia)
    {
        $noticia->delete();

        return redirect()->route('admin.noticias.index')
            ->with('success', 'Noticia eliminada correctamente.');
    }

    protected function validateData(Request $request): array
    {
        return $request->validate([
            'titulo'         => 'required|string|max:255',
            'bajada'         => 'nullable|string|max:255',
            'contenido'      => 'required|string',
            'categoria'      => 'nullable|string|max:100',
            'imagen_portada' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'publicado_en'   => 'nullable|date',
            'es_destacada'   => 'nullable|boolean',
        ]);
    }
}
