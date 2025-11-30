@extends('layouts.admin')

@section('title', 'Editar noticia')

@section('content')
    <div class="mx-auto max-w-5xl">
        {{-- Encabezado con botón de volver --}}
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900">
                    Editar noticia
                </h1>
                <p class="mt-1 text-sm text-gray-600">
                    Estás editando: 
                    <span class="font-semibold text-blue-900">
                        {{ $noticia->titulo }}
                    </span>
                </p>
            </div>

            <a href="{{ route('admin.noticias.index') }}"
               class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white
                      px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                ← Volver al listado
            </a>
        </div>

        {{-- Errores de validación --}}
        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-800">
                <p class="mb-2 font-bold">Por favor corrige los siguientes errores:</p>
                <ul class="list-disc space-y-1 pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Tarjeta del formulario --}}
        <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm sm:p-6 md:p-8">
            <form action="{{ route('admin.noticias.update', $noticia) }}"
                  method="POST"
                  enctype="multipart/form-data"
                  class="space-y-6">
                @csrf
                @method('PUT')

                {{-- Campos reutilizados --}}
                @include('admin.noticias._form')

                {{-- Botón guardar (si no lo tienes en el partial) --}}
                @sectionMissing('boton_noticia')
                    <div class="flex items-center justify-end pt-4">
                        <button type="submit"
                                class="inline-flex items-center gap-2 rounded-lg px-6 py-2.5 text-center
                                       text-sm font-medium text-white shadow-md hover:bg-blue-800 focus:outline-none
                                       focus:ring-4 focus:ring-blue-300"
                                style="background-color:#003366;">
                            <span class="material-symbols-outlined text-xl">save</span>
                            Guardar cambios
                        </button>
                    </div>
                @endsectionMissing
            </form>
        </div>
    </div>

    {{-- Mismo editor WYSIWYG que en create --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const textarea = document.querySelector('textarea[name="contenido"]');
            if (!textarea) return;

            ClassicEditor
                .create(textarea, {
                    toolbar: [
                        'undo','redo','|',
                        'bold','italic','underline','|',
                        'alignment','bulletedList','numberedList','|',
                        'link','insertTable','|',
                        'codeBlock'
                    ]
                })
                .catch(error => console.error(error));
        });
    </script>
@endsection
