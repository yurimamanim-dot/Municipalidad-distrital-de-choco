@extends('layouts.app')

@section('title','Editar noticia')

@section('content')
<div class="py-10">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-background-dark shadow-xl sm:rounded-lg p-6">
      <h1 class="mb-6 text-2xl font-bold text-gray-800 dark:text-gray-100">Editar noticia</h1>

      <form action="{{ route('admin.noticias.update', $noticia) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.noticias._form')
      </form>
    </div>
  </div>
</div>
@endsection
