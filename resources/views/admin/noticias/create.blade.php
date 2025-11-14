@extends('layouts.municipal')

@section('title','Crear noticia')

@section('content')
<div class="py-10">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow-xl sm:rounded-lg p-6">
      <h1 class="mb-6 text-2xl font-bold text-gray-800">Crear noticia</h1>

      <form action="{{ route('admin.noticias.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.noticias._form')
      </form>
    </div>
  </div>
</div>
@endsection
