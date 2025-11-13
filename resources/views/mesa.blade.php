@extends('layouts.app')
@section('title', 'Mesa de Partes Virtual')

@section('content')
    <main class="flex-grow">
        <div class="container mx-auto max-w-4xl px-4 py-12 md:py-20">
            <div class="mb-12 text-center">
                <p class="text-accent text-sm font-bold uppercase tracking-wider">Trámites en línea</p>
                <h2
                    class="text-primary dark:text-white text-4xl md:text-5xl font-extrabold tracking-wide mt-2 font-display">
                    Mesa de Partes Virtual
                </h2>
                <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg mt-4 max-w-2xl mx-auto">
                    Presente sus documentos de manera rápida y segura a través de nuestro portal digital, disponible las 24
                    horas del día.
                </p>
            </div>

            <div
                class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900/50 p-6 md:p-10 shadow-lg">

                {{-- Mensajes arriba del <form> ya están OK --}}

                    <form action="{{ route('mesa.enviar') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                        @csrf

                        {{-- DATOS DEL REMITENTE --}}
                        <div class="bg-gray-50 dark:bg-gray-800/50 p-6 rounded-lg border-l-4 border-accent">
                            <h3 class="text-lg font-bold text-primary dark:text-secondary mb-1 uppercase">Datos del
                                Remitente</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Información de la persona o entidad que
                                presenta el documento.</p>

                            <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2">
                                <label for="nombre" class="flex flex-col">
                                    <span class="text-sm font-medium pb-2">Nombre Completo <span
                                            class="text-red-600">*</span></span>
                                    <input id="nombre" name="nombre" type="text" required
                                        class="form-input rounded-lg h-12 px-4 border-gray-300 dark:border-gray-600 dark:bg-gray-800"
                                        placeholder="Ingrese su nombre completo" value="{{ old('nombre') }}">
                                    @error('nombre')<small class="text-red-600">{{ $message }}</small>@enderror
                                </label>

                                <label for="documento" class="flex flex-col">
                                    <span class="text-sm font-medium pb-2">DNI / RUC <span
                                            class="text-red-600">*</span></span>
                                    <input id="documento" name="documento" type="text" required
                                        class="form-input rounded-lg h-12 px-4 border-gray-300 dark:border-gray-600 dark:bg-gray-800"
                                        placeholder="Ingrese su número de documento" value="{{ old('documento') }}">
                                    @error('documento')<small class="text-red-600">{{ $message }}</small>@enderror
                                </label>

                                <label for="correo" class="flex flex-col">
                                    <span class="text-sm font-medium pb-2">Correo Electrónico <span
                                            class="text-red-600">*</span></span>
                                    <input id="correo" name="correo" type="email" required
                                        class="form-input rounded-lg h-12 px-4 border-gray-300 dark:border-gray-600 dark:bg-gray-800"
                                        placeholder="ejemplo@correo.com" value="{{ old('correo') }}">
                                    @error('correo')<small class="text-red-600">{{ $message }}</small>@enderror
                                </label>

                                <label for="telefono" class="flex flex-col">
                                    <span class="text-sm font-medium pb-2">Teléfono</span>
                                    <input id="telefono" name="telefono" type="tel"
                                        class="form-input rounded-lg h-12 px-4 border-gray-300 dark:border-gray-600 dark:bg-gray-800"
                                        placeholder="Ingrese su número de teléfono" value="{{ old('telefono') }}">
                                    @error('telefono')<small class="text-red-600">{{ $message }}</small>@enderror
                                </label>
                            </div>
                        </div>

                        {{-- DATOS DEL DOCUMENTO --}}
                        <div>
                            <h3 class="text-lg font-bold text-primary dark:text-secondary mb-1 uppercase">Datos del
                                Documento</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Detalles sobre el documento que está
                                presentando.</p>

                            <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2">
                                <label for="tipo" class="flex flex-col">
                                    <span class="text-sm font-medium pb-2">Tipo de Documento <span
                                            class="text-red-600">*</span></span>
                                    <select id="tipo" name="tipo" required
                                        class="form-select rounded-lg h-12 px-4 border-gray-300 dark:border-gray-600 dark:bg-gray-800">
                                        <option value="" disabled {{ old('tipo') ? '' : 'selected' }}>Seleccione una opción
                                        </option>
                                        <option value="solicitud" {{ old('tipo') == 'solicitud' ? 'selected' : '' }}>Solicitud
                                        </option>
                                        <option value="reclamo" {{ old('tipo') == 'reclamo' ? 'selected' : '' }}>Reclamo</option>
                                        <option value="oficio" {{ old('tipo') == 'oficio' ? 'selected' : '' }}>Oficio</option>
                                        <option value="carta" {{ old('tipo') == 'carta' ? 'selected' : '' }}>Carta</option>
                                        <option value="otro" {{ old('tipo') == 'otro' ? 'selected' : '' }}>Otro</option>
                                    </select>
                                    @error('tipo')<small class="text-red-600">{{ $message }}</small>@enderror
                                </label>

                                <label for="asunto" class="flex flex-col sm:col-span-2">
                                    <span class="text-sm font-medium pb-2">Asunto <span class="text-red-600">*</span></span>
                                    <input id="asunto" name="asunto" type="text" required
                                        class="form-input rounded-lg h-12 px-4 border-gray-300 dark:border-gray-600 dark:bg-gray-800"
                                        placeholder="Ej: Solicitud de licencia de construcción" value="{{ old('asunto') }}">
                                    @error('asunto')<small class="text-red-600">{{ $message }}</small>@enderror
                                </label>

                                <label for="descripcion" class="flex flex-col sm:col-span-2">
                                    <span class="text-sm font-medium pb-2">Descripción / Mensaje</span>
                                    <textarea id="descripcion" name="descripcion"
                                        class="form-textarea min-h-[120px] rounded-lg p-4 border-gray-300 dark:border-gray-600 dark:bg-gray-800"
                                        placeholder="Describa brevemente el contenido o motivo de su documento.">{{ old('descripcion') }}</textarea>
                                    @error('descripcion')<small class="text-red-600">{{ $message }}</small>@enderror
                                </label>
                            </div>
                        </div>

                        {{-- ADJUNTOS --}}
                        <div class="bg-gray-50 dark:bg-gray-800/50 p-6 rounded-lg border-l-4 border-accent">
                            <h3 class="text-lg font-bold text-primary dark:text-secondary mb-1 uppercase">Adjuntar Archivos
                            </h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Puede adjuntar el documento principal y
                                anexos si es necesario.</p>

                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-300 dark:border-gray-600 px-6 py-10 hover:border-accent">
                                <div class="text-center">
                                    <span class="material-symbols-outlined text-5xl text-gray-400">upload_file</span>
                                    <div class="mt-4 flex text-sm text-gray-600 dark:text-gray-400">
                                        <label for="file-upload"
                                            class="relative cursor-pointer rounded-md font-semibold text-secondary hover:underline">
                                            <span>Subir un archivo</span>
                                            <input id="file-upload" name="archivos[]" type="file" multiple
                                                accept=".pdf,.doc,.docx,.png,.jpg,.jpeg" class="sr-only">
                                        </label>
                                        <p class="pl-1">o arrástrelo y suéltelo aquí</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PDF, DOCX, PNG, JPG hasta 10MB por archivo</p>
                                    @error('archivos.*')<small
                                    class="text-red-600 block mt-2">{{ $message }}</small>@enderror
                                </div>
                            </div>
                        </div>

                        {{-- CONSENTIMIENTO + BOTONES --}}
                        <div class="flex flex-col items-start gap-4 pt-4">
                            <label for="privacy-policy" class="flex items-start gap-3">
                                <input id="privacy-policy" name="acepto" type="checkbox" required
                                    class="h-4 w-4 rounded border-gray-300 text-primary" {{ old('acepto') ? 'checked' : '' }}>
                                <span class="text-sm">He leído y acepto la <a href="#"
                                        class="font-medium text-secondary hover:underline">política de privacidad y
                                        tratamiento de datos.</a></span>
                            </label>
                            @error('acepto')<small class="text-red-600">{{ $message }}</small>@enderror

                            <div class="flex w-full flex-col sm:flex-row sm:items-center sm:justify-end gap-3 mt-4">
                                <button type="reset"
                                    class="rounded-lg h-12 px-6 bg-gray-200 dark:bg-gray-700 text-sm font-bold">Limpiar
                                    Formulario</button>
                                <button type="submit"
                                    class="rounded-lg h-12 px-6 bg-primary text-white text-sm font-bold gap-2 flex items-center">
                                    <span class="material-symbols-outlined text-accent">send</span> Enviar Documento
                                </button>
                            </div>
                        </div>
                    </form>

            </div>
        </div>
    </main>
@endsection