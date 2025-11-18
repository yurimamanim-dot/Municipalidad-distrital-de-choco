{{-- resources/views/organigrama.blade.php --}}
@extends('layouts.app')

@section('title', 'Municipalidad - Organigrama')

@push('head')
  <style>
    .org-chart ul {
      padding-top: 20px;
      position: relative;
      transition: all 0.5s;
    }
    .org-chart li {
      float: left;
      text-align: center;
      list-style-type: none;
      position: relative;
      padding: 20px 5px 0 5px;
      transition: all 0.5s;
    }
    .org-chart li::before,
    .org-chart li::after {
      content: '';
      position: absolute;
      top: 0;
      right: 50%;
      border-top: 2px solid #E3F2FD;
      width: 50%;
      height: 20px;
    }
    .org-chart li::after {
      right: auto;
      left: 50%;
      border-left: 2px solid #E3F2FD;
    }
    .org-chart li:only-child::after,
    .org-chart li:only-child::before {
      display: none;
    }
    .org-chart li:only-child {
      padding-top: 0;
    }
    .org-chart li:first-child::before,
    .org-chart li:last-child::after {
      border: 0 none;
    }
    .org-chart li:last-child::before {
      border-right: 2px solid #E3F2FD;
      border-radius: 0 5px 0 0;
    }
    .org-chart li:first-child::after {
      border-radius: 5px 0 0 0;
    }
    .org-chart ul ul::before {
      content: '';
      position: absolute;
      top: 0;
      left: 50%;
      border-left: 2px solid #E3F2FD;
      width: 0;
      height: 20px;
    }
    .org-chart li > div {
      border-radius: 0.5rem;
      padding: 16px;
      display: inline-block;
      min-width: 180px;
      transition: all 0.5s;
    }
  </style>
@endpush

@section('content')
  <div class="flex flex-col flex-1">
    <div class="w-full max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

      <div class="text-center mb-6">
        <h1 class="text-primary text-4xl font-black leading-tight">
          Estructura Organizacional
        </h1>
        <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
          Conoce la organización y jerarquía de nuestra municipalidad.
        </p>
      </div>

      <p class="text-gray-700 text-base text-center max-w-3xl mx-auto pb-6">
        A continuación se presenta el organigrama visual que ilustra las jerarquías principales
        de nuestra institución, desde el Alcalde hasta las diversas áreas y departamentos.
      </p>

      {{-- Organigrama --}}
      <div class="org-chart flex justify-center overflow-x-auto">
        <ul>
          <li>
            <div class="bg-primary text-white shadow-lg">
              <h3 class="font-bold text-lg">Alcalde</h3>
              <p class="text-sm">Juan Pérez</p>
            </div>
            <ul>
              <li>
                <div class="bg-primary text-white shadow-md">
                  <h3 class="font-bold text-base">Gerencia Municipal</h3>
                  <p class="text-xs">Ana García</p>
                </div>
                <ul>
                  <li>
                    <div class="bg-green-600 text-white shadow-md">
                      <h3 class="font-bold text-base">Subgerencia de Obras</h3>
                      <p class="text-xs">Carlos Rodríguez</p>
                    </div>
                  </li>
                  <li>
                    <div class="bg-green-600 text-white shadow-md">
                      <h3 class="font-bold text-base">Subgerencia de Servicios</h3>
                      <p class="text-xs">Luisa Martínez</p>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <div class="bg-primary text-white shadow-md">
                  <h3 class="font-bold text-base">Gerencia de Administración</h3>
                  <p class="text-xs">Pedro Sánchez</p>
                </div>
                <ul>
                  <li>
                    <div class="bg-green-600 text-white shadow-md">
                      <h3 class="font-bold text-base">Recursos Humanos</h3>
                      <p class="text-xs">María López</p>
                    </div>
                  </li>
                  <li>
                    <div class="bg-green-600 text-white shadow-md">
                      <h3 class="font-bold text-base">Logística</h3>
                      <p class="text-xs">José Fernández</p>
                    </div>
                  </li>
                  <li>
                    <div class="bg-green-600 text-white shadow-md">
                      <h3 class="font-bold text-base">Tesorería</h3>
                      <p class="text-xs">Sofía Gómez</p>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="flex justify-center mt-10">
        <button
          type="button"
          class="flex items-center gap-2 rounded-lg h-12 px-5 bg-green-600 hover:bg-green-700 text-white text-sm font-bold shadow-md"
        >
          <span class="material-symbols-outlined text-white">download</span>
          <span>Descargar Organigrama PDF</span>
        </button>
      </div>

    </div>
  </div>
@endsection
