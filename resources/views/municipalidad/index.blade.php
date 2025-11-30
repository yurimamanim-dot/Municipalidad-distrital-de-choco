@extends('layouts.municipal')

@section('title', 'Tu Municipalidad - Municipalidad Distrital de Choco')

@section('content')
<div class="flex flex-1 justify-center py-10 bg-gray-50 min-h-screen">
    <div class="flex flex-col max-w-5xl flex-1 w-full gap-8 px-4 sm:px-10">

        {{-- Navegación --}}
        <div class="flex flex-wrap gap-2 px-4 py-2">
            <a href="{{ route('inicio') }}"
               class="text-gray-500 text-sm font-medium hover:text-secondary transition-colors">
                INICIO
            </a>
            <span class="text-gray-400 text-sm font-medium">/</span>
            <span class="text-gray-900 text-sm font-medium">
                TU MUNICIPALIDAD
            </span>
        </div>

        {{-- Tarjeta de la Alcaldesa --}}
        <section class="flex p-6 md:p-7 bg-white rounded-2xl shadow-sm border border-gray-200">
            <div class="flex w-full flex-col gap-6 sm:gap-8 sm:flex-row sm:items-center">
                <img
                    class="aspect-square rounded-full h-32 w-32 md:h-36 md:w-36 object-cover mx-auto sm:mx-0
                           border-4 border-gray-100 shadow-md"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPmRamh1DrHQ3HwGRbH5_rMj0gjRwl0pvzAZ0SLDI7vPhvgV2FXJxODfZ2uh8BnQxpeKyr_m_7J1Z0Ms9PT3fRPSHSwXp-mmqWK2HktReHPQBAqeU4kjW9__VyVKuIIAJSmGizSVQ4EBEiFYlQM5FLGajqZz5WR-O_Rv6F83dyW9j4ASkYgosbRaErXmyzc6e3iOj-LiHSQpt8QhoGzHa5EpeoN3AbmFProhL5Ov0ZK0EBxZSBx2M1cV1J32vHGYymPDdBwH6VLrTO"
                    alt="Alcaldesa Eva Elizabeth Chura Quicaña"
                >

                <div class="flex flex-col justify-center text-center sm:text-left gap-2">
                    <span class="inline-flex items-center justify-center gap-2 self-center sm:self-start
                                 px-3 py-1 rounded-full bg-secondary/10 text-secondary text-xs font-semibold uppercase">
                        <span class="material-symbols-outlined text-sm">verified</span>
                        Alcaldesa Distrital
                    </span>

                    <p class="text-primary text-2xl md:text-3xl font-black uppercase tracking-wide mt-1">
                        Eva Elizabeth Chura Quicaña
                    </p>

                    <p class="text-gray-700 text-sm md:text-base leading-relaxed mt-2 max-w-2xl">
                        Bienvenidos al portal de la Municipalidad Distrital de Choco. Trabajamos de la mano con
                        nuestros vecinos para construir un distrito más seguro, moderno y con mejores oportunidades
                        para todos.
                    </p>
                </div>
            </div>
        </section>

        {{-- Menú de Accesos --}}
        <section>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['route' => 'mision',         'icon' => 'target',        'title' => 'Misión',     'desc' => 'Nuestro propósito fundamental.'],
                    ['route' => 'vision',         'icon' => 'rocket_launch', 'title' => 'Visión',     'desc' => 'Nuestras aspiraciones de futuro.'],
                    ['route' => 'historia',       'icon' => 'history_edu',   'title' => 'Historia',   'desc' => 'Hitos más importantes del distrito.'],
                    ['route' => 'organigrama',    'icon' => 'account_tree',  'title' => 'Organigrama','desc' => 'Nuestra estructura jerárquica.'],
                    ['route' => 'valores',        'icon' => 'verified_user', 'title' => 'Valores',    'desc' => 'Principios y valores institucionales.'],
                    ['route' => 'equipo-gestion', 'icon' => 'groups',        'title' => 'Gestión',    'desc' => 'Conoce a nuestro equipo de gestión.'],
                ] as $item)
                    <a href="{{ route($item['route']) }}"
                       class="group flex flex-col gap-4 rounded-xl border border-gray-200 bg-white p-6 shadow-sm
                              transition-all hover:shadow-lg hover:-translate-y-1 hover:border-secondary focus:outline-none
                              focus:ring-2 focus:ring-secondary/40">
                        <div class="h-12 w-12 flex items-center justify-center rounded-full bg-blue-50 text-primary
                                    group-hover:bg-secondary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">
                                {{ $item['icon'] }}
                            </span>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold text-gray-900 uppercase group-hover:text-primary">
                                {{ $item['title'] }}
                            </h2>
                            <p class="text-sm text-gray-500">
                                {{ $item['desc'] }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection
