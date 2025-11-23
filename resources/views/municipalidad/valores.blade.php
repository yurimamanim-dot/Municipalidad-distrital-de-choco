@extends('layouts.municipal')

@section('title', 'Nuestros Valores - Municipalidad')

@section('content')
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden bg-white">
    <div class="layout-container flex h-full grow flex-col">
        <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                
                {{-- Migas de Pan (Para mantener consistencia) --}}
                <div class="flex flex-wrap gap-2 px-4 py-2 mb-4">
                    <a class="text-gray-500 text-sm font-medium hover:text-secondary transition-colors" href="{{ route('inicio') }}">INICIO</a>
                    <span class="text-gray-400 text-sm font-medium">/</span>
                    <a class="text-gray-500 text-sm font-medium hover:text-secondary transition-colors" href="{{ route('la-municipalidad') }}">TU MUNICIPALIDAD</a>
                    <span class="text-gray-400 text-sm font-medium">/</span>
                    <span class="text-gray-900 text-sm font-medium">VALORES</span>
                </div>

                <main class="flex-1">
                    <!-- PageHeading -->
                    <div class="flex flex-wrap justify-between gap-3 p-4 py-12 text-center">
                        <div class="flex w-full flex-col gap-3">
                            <h1 class="text-primary text-4xl font-black leading-tight tracking-[-0.033em]">Nuestros Valores</h1>
                            <p class="text-gray-600 text-base font-normal leading-normal">Los principios que guían nuestro compromiso con la comunidad.</p>
                        </div>
                    </div>

                    <!-- TextGrid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
                        
                        <!-- Valor 1: Responsabilidad -->
                        <div class="flex flex-1 gap-4 rounded-xl border border-gray-200 bg-white p-6 flex-col items-center text-center hover:shadow-lg hover:-translate-y-1 transition-all duration-300 hover:border-secondary">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-50 text-secondary">
                                <span class="material-symbols-outlined">shield_with_heart</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-primary text-base font-bold leading-tight">Responsabilidad</h2>
                                <p class="text-gray-600 text-sm font-normal leading-normal">Compromiso con nuestras obligaciones y el buen uso de los recursos públicos.</p>
                            </div>
                        </div>

                        <!-- Valor 2: Transparencia -->
                        <div class="flex flex-1 gap-4 rounded-xl border border-gray-200 bg-white p-6 flex-col items-center text-center hover:shadow-lg hover:-translate-y-1 transition-all duration-300 hover:border-secondary">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-50 text-secondary">
                                <span class="material-symbols-outlined">balance</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-primary text-base font-bold leading-tight">Transparencia</h2>
                                <p class="text-gray-600 text-sm font-normal leading-normal">Garantizamos el acceso a la información pública y actuamos con honestidad.</p>
                            </div>
                        </div>

                        <!-- Valor 3: Inclusión -->
                        <div class="flex flex-1 gap-4 rounded-xl border border-gray-200 bg-white p-6 flex-col items-center text-center hover:shadow-lg hover:-translate-y-1 transition-all duration-300 hover:border-secondary">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-50 text-secondary">
                                <span class="material-symbols-outlined">groups</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-primary text-base font-bold leading-tight">Inclusión</h2>
                                <p class="text-gray-600 text-sm font-normal leading-normal">Fomentamos la diversidad y la participación activa de todos los ciudadanos.</p>
                            </div>
                        </div>

                        <!-- Valor 4: Respeto -->
                        <div class="flex flex-1 gap-4 rounded-xl border border-gray-200 bg-white p-6 flex-col items-center text-center hover:shadow-lg hover:-translate-y-1 transition-all duration-300 hover:border-secondary">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-50 text-secondary">
                                <span class="material-symbols-outlined">handshake</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-primary text-base font-bold leading-tight">Respeto</h2>
                                <p class="text-gray-600 text-sm font-normal leading-normal">Promovemos la dignidad y la consideración en el trato con nuestra comunidad.</p>
                            </div>
                        </div>

                        <!-- Valor 5: Innovación -->
                        <div class="flex flex-1 gap-4 rounded-xl border border-gray-200 bg-white p-6 flex-col items-center text-center hover:shadow-lg hover:-translate-y-1 transition-all duration-300 hover:border-secondary">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-50 text-secondary">
                                <span class="material-symbols-outlined">lightbulb</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-primary text-base font-bold leading-tight">Innovación</h2>
                                <p class="text-gray-600 text-sm font-normal leading-normal">Buscamos constantemente soluciones creativas y eficientes para el bien común.</p>
                            </div>
                        </div>

                        <!-- Valor 6: Solidaridad -->
                        <div class="flex flex-1 gap-4 rounded-xl border border-gray-200 bg-white p-6 flex-col items-center text-center hover:shadow-lg hover:-translate-y-1 transition-all duration-300 hover:border-secondary">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-50 text-secondary">
                                <span class="material-symbols-outlined">volunteer_activism</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-primary text-base font-bold leading-tight">Solidaridad</h2>
                                <p class="text-gray-600 text-sm font-normal leading-normal">Fomentamos el apoyo mutuo y trabajamos juntos por el bienestar de todos.</p>
                            </div>
                        </div>

                    </div>

                    <!-- HeadlineText -->
                    <div class="py-12">
                        <h3 class="text-secondary tracking-light text-2xl font-bold leading-tight px-4 text-center pb-2 pt-5">
                            Guiamos cada acción con ética y compromiso por nuestra comunidad.
                        </h3>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection