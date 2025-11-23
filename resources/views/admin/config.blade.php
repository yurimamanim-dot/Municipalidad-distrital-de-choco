@extends('layouts.admin')

@section('title', 'Configuración del Portal')

@section('content')
<div class="max-w-4xl mx-auto">
    
    <div class="flex flex-col gap-2 mb-8">
        <h1 class="text-3xl font-black tracking-tight text-gray-900">
            Configuración General
        </h1>
        <p class="text-base font-normal text-gray-600">
            Gestiona los datos de contacto y la red social oficial.
        </p>
    </div>

    {{-- OJO: La ruta apunta al update que crearemos en breve --}}
    <form action="{{ route('admin.config.update') }}" method="POST" class="flex flex-col gap-8">
        @csrf
        @method('PUT')

        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <div class="flex items-center gap-3 mb-6 border-b border-gray-100 pb-4">
                <span class="material-symbols-outlined text-blue-900">contact_support</span>
                <h2 class="text-xl font-bold leading-tight text-gray-900">
                    Información de Contacto
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Dirección --}}
                <label class="flex flex-col w-full col-span-1 md:col-span-2">
                    <span class="text-sm font-bold pb-2 text-gray-700">Dirección Oficial</span>
                    <textarea name="direccion" rows="2"
                        class="flex w-full rounded-lg border border-gray-300 bg-gray-50 p-3 text-sm focus:border-blue-900 focus:ring-blue-900"
                        >{{ $config->direccion ?? '' }}</textarea>
                </label>

                {{-- Correo --}}
                <label class="flex flex-col w-full">
                    <span class="text-sm font-bold pb-2 text-gray-700">Correo Mesa de Partes</span>
                    <input type="email" name="email" value="{{ $config->email ?? '' }}"
                        class="flex w-full rounded-lg border border-gray-300 bg-gray-50 h-11 p-3 text-sm focus:border-blue-900 focus:ring-blue-900"/>
                </label>

                {{-- Teléfono --}}
                <label class="flex flex-col w-full">
                    <span class="text-sm font-bold pb-2 text-gray-700">Teléfono Fijo</span>
                    <input type="text" name="telefono" value="{{ $config->telefono ?? '' }}"
                        class="flex w-full rounded-lg border border-gray-300 bg-gray-50 h-11 p-3 text-sm focus:border-blue-900 focus:ring-blue-900"/>
                </label>

                {{-- WhatsApp --}}
                <label class="flex flex-col w-full">
                    <span class="text-sm font-bold pb-2 text-gray-700">WhatsApp de Atención</span>
                    <input type="text" name="whatsapp" value="{{ $config->whatsapp ?? '' }}"
                        class="flex w-full rounded-lg border border-gray-300 bg-gray-50 h-11 p-3 text-sm focus:border-blue-900 focus:ring-blue-900"/>
                </label>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <div class="flex items-center gap-3 mb-6 border-b border-gray-100 pb-4">
                <span class="material-symbols-outlined text-blue-900">share</span>
                <h2 class="text-xl font-bold leading-tight text-gray-900">
                    Red Social Oficial
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-6">
                <label class="flex flex-col w-full">
                    <span class="text-sm font-bold pb-2 text-gray-700">Facebook URL</span>
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-blue-700 font-bold">f</span>
                        <input type="url" name="facebook" value="{{ $config->facebook ?? '' }}" placeholder="https://facebook.com/tu_pagina"
                            class="flex w-full rounded-lg border border-gray-300 bg-gray-50 h-11 pl-8 pr-3 text-sm focus:border-blue-900 focus:ring-blue-900"/>
                    </div>
                </label>
            </div>
        </div>

        <div class="pt-4 flex justify-end gap-4">
            <a href="{{ route('admin.dashboard') }}" 
               class="px-5 py-2.5 rounded-lg text-sm font-bold bg-white border border-gray-300 text-gray-700 hover:bg-gray-50">
                Cancelar
            </a>
            
            <button type="submit" 
                    class="px-5 py-2.5 rounded-lg text-sm font-bold text-white shadow-md hover:bg-blue-800 flex items-center gap-2"
                    style="background-color: #003366;">
                <span class="material-symbols-outlined text-lg">save</span>
                Guardar Cambios
            </button>
        </div>
    </form>
</div>
@endsection