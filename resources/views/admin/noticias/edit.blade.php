@extends('layouts.admin')

@section('title', 'Editar noticia')

@section('content')
<div class="max-w-5xl mx-auto">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Editar noticia</h1>

    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg text-sm text-red-700">
            <p class="font-semibold mb-2">Se encontraron algunos errores:</p>
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.noticias.update', $noticia) }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-6 bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')

        @include('admin.noticias._form')

    </form>
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
