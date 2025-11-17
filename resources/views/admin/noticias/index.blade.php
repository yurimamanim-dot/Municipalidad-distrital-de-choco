@extends('layouts.admin')

@section('title', 'Gestión de Noticias')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-extrabold text-gray-900">Gestión de Noticias</h1>
            <p class="text-sm text-gray-600 mt-1">
                Listado de noticias publicadas en el portal municipal.
            </p>
        </div>

        <a href="{{ route('admin.noticias.create') }}"
           class="inline-flex items-center gap-2 rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white
                  hover:bg-emerald-700">
            <span class="material-symbols-outlined text-base">add</span>
            Nueva noticia
        </a>
    </div>

    @if (session('ok'))
        <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-2 text-sm text-green-800">
            {{ session('ok') }}
        </div>
    @endif

    <div class="overflow-x-auto rounded-xl border border-gray-200 bg-white shadow-sm">
        <table class="min-w-full text-left text-sm">
            <thead class="bg-gray-50 text-xs font-semibold uppercase text-gray-500">
                <tr>
                    <th class="px-4 py-3">Título</th>
                    <th class="px-4 py-3">Estado</th>
                    <th class="px-4 py-3">Fecha</th>
                    <th class="px-4 py-3 text-right">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($noticias as $noticia)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <p class="font-medium text-gray-900">{{ $noticia->titulo }}</p>
                            <p class="text-xs text-gray-500">Slug: {{ $noticia->slug }}</p>
                        </td>
                        <td class="px-4 py-3">
                            @if($noticia->publicado)
                                <span class="inline-flex items-center rounded-full bg-emerald-50 px-2.5 py-0.5 text-xs font-semibold text-emerald-700">
                                    Publicado
                                </span>
                            @else
                                <span class="inline-flex items-center rounded-full bg-yellow-50 px-2.5 py-0.5 text-xs font-semibold text-yellow-800">
                                    Borrador
                                </span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-sm text-gray-700">
                            {{ $noticia->created_at?->format('d/m/Y') }}
                        </td>
                        <td class="px-4 py-3 text-right space-x-2">
                            <a href="{{ route('admin.noticias.edit', $noticia) }}"
                               class="inline-flex rounded-lg border border-gray-200 px-3 py-1.5 text-xs font-semibold text-gray-700 hover:bg-gray-100">
                                Editar
                            </a>

                            <form action="{{ route('admin.noticias.destroy', $noticia) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('¿Eliminar esta noticia?')"
                                        class="inline-flex rounded-lg border border-red-200 px-3 py-1.5 text-xs font-semibold text-red-700 hover:bg-red-50">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-sm text-gray-500">
                            No hay noticias registradas.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
