<<<<<<< HEAD
@extends('layouts.admin')
=======
@extends('layouts.municipal') {{-- layout admin --}}
>>>>>>> 6f8339abbc9da623e15628922adf24a28ce2d41c

@section('title', 'Crear noticia')

@section('content')
<<<<<<< HEAD
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-extrabold text-gray-900">Nueva noticia</h1>
            <p class="text-sm text-gray-600 mt-1">
                Registra una nueva noticia para el portal municipal.
            </p>
        </div>
=======
<div class="py-10">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow-xl sm:rounded-lg p-6">
      <h1 class="mb-6 text-2xl font-bold text-gray-800">Crear noticia</h1>
>>>>>>> 6f8339abbc9da623e15628922adf24a28ce2d41c

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
<<<<<<< HEAD
=======
  </div>
</div>

{{-- Editor WYSIWYG para "contenido" usando CKEditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create( document.querySelector('textarea[name="contenido"]'), {
      toolbar: [
        'undo','redo','|',
        'bold','italic','underline','|',
        'alignment','bulletedList','numberedList','|',
        'link','insertTable','|',
        'codeBlock'
      ]
    } )
    .catch( error => {
      console.error( error );
    } );
</script>
>>>>>>> 6f8339abbc9da623e15628922adf24a28ce2d41c
@endsection
