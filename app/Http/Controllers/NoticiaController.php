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
            ->where('publicado', true)          // 👈 solo noticias publicadas
            ->whereNotNull('publicado_en')      // opcional: que tengan fecha
            ->orderByDesc('publicado_en');

        if ($categoria && $categoria !== 'Todos') {
            $query->where('categoria', $categoria);
        }

        $noticias = $query->paginate(12)->withQueryString();

        // Filtros de categoría para el listado público
        $categorias = ['Todos', 'Eventos', 'Obras', 'Seguridad', 'Salud', 'Educación'];

        return view('noticias.index', compact('noticias', 'categorias', 'categoria'));
    }

    /**
     * Detalle público de noticia (por slug) + noticias relacionadas.
     */
    public function showPublica(string $slug)
    {
        // Solo permite ver noticias publicadas
        $noticia = Noticia::where('slug', $slug)
            ->where('publicado', true)
            ->whereNotNull('publicado_en')
            ->firstOrFail();

        // 1) Base: noticias distintas a la actual y publicadas
        $relacionadasQuery = Noticia::where('id', '!=', $noticia->id)
            ->where('publicado', true)
            ->whereNotNull('publicado_en');

        // 2) Si la noticia tiene categoría, priorizamos esa misma categoría
        if ($noticia->categoria) {
            $relacionadasQuery->where('categoria', $noticia->categoria);
        }

        $relacionadas = $relacionadasQuery
            ->latest('publicado_en')
            ->take(3)
            ->get();

        // 3) Si no alcanzamos 3 relacionadas, rellenamos con otras categorías
        if ($relacionadas->count() < 3) {
            $faltan = 3 - $relacionadas->count();

            $extras = Noticia::where('id', '!=', $noticia->id)
                ->where('publicado', true)
                ->whereNotNull('publicado_en')
                ->when($noticia->categoria, function ($q) use ($noticia) {
                    $q->where('categoria', '!=', $noticia->categoria);
                })
                ->latest('publicado_en')
                ->take($faltan)
                ->get();

            $relacionadas = $relacionadas->concat($extras);
        }

        return view('noticias.show', compact('noticia', 'relacionadas'));
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

        // Imagen
        if ($request->hasFile('imagen_portada')) {
            $data['imagen_portada'] = $request->file('imagen_portada')->store('noticias', 'public');
        }

        // Booleanos
        $data['es_destacada'] = $request->boolean('es_destacada');
        $data['publicado']    = $request->boolean('publicado'); // 👈 toma el valor del select

        Noticia::create($data);

        return redirect()
            ->route('admin.noticias.index')
            ->with('ok', 'Noticia creada correctamente.');
    }

    /**
     * Si llegaras a usar Route::resource para admin.noticias.show,
     * reutilizamos la misma vista pública (con relacionadas).
     */
    public function show(Noticia $noticia)
    {
        // Simplemente usamos la lógica de showPublica con el slug
        return $this->showPublica($noticia->slug);
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
        $data['publicado']    = $request->boolean('publicado'); // 👈 idem en update

        $noticia->update($data);

        return redirect()
            ->route('admin.noticias.index')
            ->with('ok', 'Noticia actualizada correctamente.');
    }

    public function destroy(Noticia $noticia)
    {
        $noticia->delete();

        return redirect()
            ->route('admin.noticias.index')
            ->with('ok', 'Noticia eliminada correctamente.');
    }

    // ----------- VALIDACIÓN COMPARTIDA -----------

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
            'publicado'      => 'nullable|boolean',
        ]);
    }
}
