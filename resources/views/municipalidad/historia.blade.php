@extends('layouts.municipal')

@section('title', 'Nuestra Historia - Municipalidad')

@section('content')
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden bg-white">
    <div class="layout-container flex h-full grow flex-col">
        <div class="px-4 sm:px-8 md:px-20 lg:px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col w-full max-w-[960px] flex-1">
                
                {{-- Migas de Pan (Para mantener consistencia) --}}
                <div class="flex flex-wrap gap-2 px-4 py-2 mb-4">
                    <a class="text-gray-500 text-sm font-medium hover:text-secondary transition-colors" href="{{ route('inicio') }}">INICIO</a>
                    <span class="text-gray-400 text-sm font-medium">/</span>
                    <a class="text-gray-500 text-sm font-medium hover:text-secondary transition-colors" href="{{ route('la-municipalidad') }}">TU MUNICIPALIDAD</a>
                    <span class="text-gray-400 text-sm font-medium">/</span>
                    <span class="text-gray-900 text-sm font-medium">HISTORIA</span>
                </div>

                <main class="flex flex-col gap-8 md:gap-12 py-8 md:py-12">
                    <!-- PageHeading -->
                    <div class="flex flex-wrap justify-between gap-3 p-8 bg-primary rounded-xl text-white shadow-lg">
                        <div class="flex min-w-72 flex-col gap-3">
                            <p class="text-4xl font-black leading-tight tracking-[-0.033em]">Nuestra Historia</p>
                            <p class="text-base font-normal leading-normal text-white/90">Un recorrido por los hitos que han forjado nuestra comunidad y definido nuestro progreso a lo largo de los años.</p>
                        </div>
                    </div>

                    <!-- Timeline -->
                    <div class="grid grid-cols-[40px_1fr] gap-x-2 px-4">
                        
                        {{-- Hito 1: 1925 --}}
                        <div class="flex flex-col items-center gap-1 pt-3">
                            <div class="text-primary"><span class="material-symbols-outlined">flag</span></div>
                            <div class="w-[1.5px] bg-gray-200 h-2 grow"></div>
                        </div>
                        <div class="flex flex-1 flex-col py-3 pb-8">
                            <p class="text-lg font-bold leading-normal text-gray-900">Fundación del Distrito</p>
                            <p class="text-base font-medium leading-normal text-gray-500">1925</p>
                            <p class="mt-2 text-sm text-gray-600">Se establece oficialmente el distrito, marcando el inicio de nuestra historia como comunidad organizada.</p>
                        </div>

                        {{-- Hito 2: 1958 --}}
                        <div class="flex flex-col items-center gap-1">
                            <div class="w-[1.5px] bg-gray-200 h-2"></div>
                            <div class="text-primary"><span class="material-symbols-outlined">domain</span></div>
                            <div class="w-[1.5px] bg-gray-200 h-2 grow"></div>
                        </div>
                        <div class="flex flex-1 flex-col py-3 pb-8">
                            <p class="text-lg font-bold leading-normal text-gray-900">Inauguración del Palacio Municipal</p>
                            <p class="text-base font-medium leading-normal text-gray-500">1958</p>
                            <p class="mt-2 text-sm text-gray-600">Se inaugura el nuevo centro administrativo, un símbolo de progreso y servicio a la ciudadanía.</p>
                        </div>

                        {{-- Hito 3: 1992 --}}
                        <div class="flex flex-col items-center gap-1">
                            <div class="w-[1.5px] bg-gray-200 h-2"></div>
                            <div class="text-primary"><span class="material-symbols-outlined">map</span></div>
                            <div class="w-[1.5px] bg-gray-200 h-2 grow"></div>
                        </div>
                        <div class="flex flex-1 flex-col py-3 pb-8">
                            <p class="text-lg font-bold leading-normal text-gray-900">Lanzamiento del Plan de Desarrollo Urbano</p>
                            <p class="text-base font-medium leading-normal text-gray-500">1992</p>
                            <p class="mt-2 text-sm text-gray-600">Un ambicioso plan que moderniza la infraestructura y planifica el crecimiento sostenible de la ciudad.</p>
                        </div>

                        {{-- Hito 4: 2015 --}}
                        <div class="flex flex-col items-center gap-1 pb-3">
                            <div class="w-[1.5px] bg-gray-200 h-2"></div>
                            <div class="text-secondary"><span class="material-symbols-outlined">eco</span></div>
                        </div>
                        <div class="flex flex-1 flex-col py-3">
                            <p class="text-lg font-bold leading-normal text-secondary">Creación del Parque Central Sostenible</p>
                            <p class="text-base font-medium leading-normal text-gray-500">2015</p>
                            <p class="mt-2 text-sm text-gray-600">Un hito ecológico que proporciona un pulmón verde para la ciudad y promueve la biodiversidad.</p>
                        </div>
                    </div>

                    <!-- SectionHeader -->
                    <h2 class="text-gray-900 text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5 border-t border-gray-200 mt-4">
                        Galería Histórica
                    </h2>

                    <!-- ImageGrid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 px-4">
                        {{-- Imagen 1 --}}
                        <div class="flex flex-col gap-3 pb-3 group">
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg bg-gray-200 shadow-sm group-hover:shadow-md transition-shadow" 
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCVGoEMSqkxdJ6_SjzuMyh6pYSt-ShXT3iMtimetGNSWhaZcwA06CEZWIz06Gsg58DgL5YSnbhnGAFuVq7Aqffqh1cjI3FhAwEWSG5qHMYR2sCnc5vd_eOhyy5bR9FCm4U0zPhlbua4yyQ7y23wRB-avLFoiMlABCQ6l4223Y_SZPw1Jn5opnhJiUTpttLjHsYZyab5kDxtSuK9TpWkDbx4dxTb3kaJcKTy5eTInzn21bsg-ji1VsUcYWJBhGPWnjMKRIeaftOyiWfp')">
                            </div>
                            <div>
                                <p class="text-base font-medium leading-normal text-gray-900 group-hover:text-primary transition-colors">Plaza Principal, 1940</p>
                                <p class="text-sm font-normal leading-normal text-gray-500">Una vista de la vida cotidiana en el corazón de nuestro distrito.</p>
                            </div>
                        </div>

                        {{-- Imagen 2 --}}
                        <div class="flex flex-col gap-3 pb-3 group">
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg bg-gray-200 shadow-sm group-hover:shadow-md transition-shadow" 
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAzowOEdx4Z8x6hjTO-2sjBs7mATjucQOY4xKfkEkUAH738gLuMlnAJCu_sPC1TPA5US5e26WvG9-Xylm4yfOk5KPV_7o3-pCA4h0A9IP0z5P3piD7VnjKC1do_bkiaDcnjlFEToay_Wr9OtAj_7WfBHlfT9HsWKpJ84d1dKr8LGqMZIHFVhFtS-30bNVGAmOe9LtISkcCTJgPFdj1CIeT0hLZCOZ_Kn3u1PuLpTIWvJDgdjG-LsY4i3P9YMWB_mE8D2EKYnXolqHy7')">
                            </div>
                            <div>
                                <p class="text-base font-medium leading-normal text-gray-900 group-hover:text-primary transition-colors">Construcción del Puente</p>
                                <p class="text-sm font-normal leading-normal text-gray-500">Obreros trabajando en el principal conector vial de la ciudad.</p>
                            </div>
                        </div>

                        {{-- Imagen 3 --}}
                        <div class="flex flex-col gap-3 pb-3 group">
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg bg-gray-200 shadow-sm group-hover:shadow-md transition-shadow" 
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCjns1MnGQ8ONOB3YJWkT5BoN_OAdPt8YY-aiigsLi58ZK0uZFfmsSgwUWsHvk4Xto835btjPKEELHyUKcMbSNOk2GrmGVmcvQ8MGh10HdGwaidFzVbo8v6PoIVGpJJMVyU3IHfZ9lHNs_IlwFrvLXnD0GiBS6tIK_HLncMigvr3fTzmFmqLyfL62r7ZFIvt2ZZ7PGRRj3PqYhEsarKcxWhpzuK1CFvwNnPNy916umYReg2yxUdKjyryPyKabzS0-K8dSxwO6Vo2RFu')">
                            </div>
                            <div>
                                <p class="text-base font-medium leading-normal text-gray-900 group-hover:text-primary transition-colors">Primer Desfile Cívico</p>
                                <p class="text-sm font-normal leading-normal text-gray-500">Escolares y autoridades marchando por la avenida principal.</p>
                            </div>
                        </div>

                        {{-- Imagen 4 --}}
                        <div class="flex flex-col gap-3 pb-3 group">
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg bg-gray-200 shadow-sm group-hover:shadow-md transition-shadow" 
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDWMWPbcdIAk_U9yIUSCuX72Y6MILQ4r36WvzfNwE8wUP0bLw2GsxZKOnfcRi0RvQsz98ExUUoiexw-d7vEHrcpiBadTXprlROVoIbENZdAmPFF-FSNSg1j20u3dadHKVxMQzksiXWwjEeqhy5Y-YB_7eUp9FE7YPcNI26CRa-RsFUIYe9DBGIkj9u-nlBPjl7Sq0oYZ_2HLRCzz5S2_QUndoGq7_hdKyDJc8rX4rpuPjoh5tA8-912NHu2KCkSNYKqgMxqaiNuQfOi')">
                            </div>
                            <div>
                                <p class="text-base font-medium leading-normal text-gray-900 group-hover:text-primary transition-colors">Mercado Municipal Antiguo</p>
                                <p class="text-sm font-normal leading-normal text-gray-500">El centro de comercio y encuentro de la comunidad en los años 60.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Closing Block -->
                    <div class="mt-8 p-6 bg-gray-50 border-l-4 border-secondary rounded-r-lg">
                        <p class="text-xl font-semibold text-gray-800">
                            Más de <span class="text-primary font-bold">99 años</span> trabajando por el desarrollo de nuestra comunidad.
                        </p>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection