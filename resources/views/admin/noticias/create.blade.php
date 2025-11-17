@extends('layouts.admin')

@section('title', 'Crear noticia')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-extrabold text-gray-900">Nueva noticia</h1>
            <p class="text-sm text-gray-600 mt-1">
                Registra una nueva noticia para el portal municipal.
            </p>
        </div>

        <a href="{{ route('admin.noticias.index') }}"
           class="inline-flex items-center gap-1 rounded-lg border border-gray-300 px-3 py-1.5 text-sm font-semibold text-gray-700 hover:bg-gray-50">
            <span class="material-symbols-outlined text-sm">arrow_back</span>
            Volver
        </a>
    </div>

    <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
        <form action="{{ route('admin.noticias.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            @include('admin.noticas._form') {{-- si tu partial se llama distinto, ajústalo --}}
        </form>
    </div>
@endsection
