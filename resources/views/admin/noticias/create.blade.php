@extends('layouts.admin')

@section('title', 'Crear noticia')

@section('content')
    <div class="mx-auto max-w-5xl space-y-6">
        {{-- Encabezado --}}
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-extrabold text-gray-900 md:text-3xl">
                    Crear noticia
                </h1>
                <p class="mt-1 text-sm text-gray-600">
                    Registra una nueva publicación para el portal municipal.
                </p>
            </div>

            <a href="{{ route('admin.noticias.index') }}"
               class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                ← Volver al listado
            </a>
        </div>

        {{-- Errores de validación --}}
        @if ($errors->any())
            <div class="rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                <p class="mb-2 font-semibold">Se encontraron algunos errores:</p>
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulario --}}
        <form action="{{ route('admin.noticias.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="space-y-6 rounded-lg bg-white p-6 shadow md:p-8">
            @csrf

            @include('admin.noticias._form')
        </form>
    </div>

    {{-- Editor WYSIWYG para el campo "contenido" --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const textarea = document.querySelector('textarea[name="contenido"]');
            if (!textarea) return;

            ClassicEditor
                .create(textarea, {
                    toolbar: [
                        'undo', 'redo', '|',
                        'bold', 'italic', 'underline', '|',
                        'alignment', 'bulletedList', 'numberedList', '|',
                        'link', 'insertTable', '|',
                        'codeBlock'
                    ]
                })
                .catch(error => console.error(error));
        });
    </script>
@endsection
