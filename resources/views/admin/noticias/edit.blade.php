@extends('layouts.municipal')

@section('title','Editar noticia')

@section('content')
<div class="py-10">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow-xl sm:rounded-lg p-6">
      <h1 class="mb-6 text-2xl font-bold text-gray-800">Editar noticia</h1>

      <form action="{{ route('admin.noticias.update', $noticia) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.noticias._form')
      </form>
    </div>
  </div>
</div>

{{-- Mismo editor WYSIWYG que en create --}}
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
@endsection
