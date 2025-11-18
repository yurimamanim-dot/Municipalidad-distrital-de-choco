{{-- resources/views/historia.blade.php --}}
@extends('layouts.app')

@section('title', 'Municipalidad - Nuestra Historia')

@section('content')
  <div class="flex justify-center py-10">
    <div class="w-full max-w-5xl px-4 flex flex-col gap-10">

      {{-- Encabezado --}}
      <header class="border-b border-gray-200 pb-4">
        <div class="flex items-center gap-3 text-primary">
          <div class="size-6">
            <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z"
                fill="currentColor"
              />
            </svg>
          </div>
          <h2 class="text-lg font-bold tracking-tight text-gray-900">Municipalidad</h2>
        </div>
      </header>

      {{-- Bloque título --}}
      <div class="bg-primary text-white rounded-xl p-6">
        <p class="text-3xl font-black leading-tight">Nuestra Historia</p>
        <p class="mt-3 text-sm text-white/80">
          Un recorrido por los hitos que han forjado nuestra comunidad y definido nuestro progreso a lo largo de los años.
        </p>
      </div>

      {{-- Línea de tiempo --}}
      <div class="grid grid-cols-[32px_1fr] gap-x-2">
        {{-- Punto 1 --}}
        <div class="flex flex-col items-center pt-3">
          <div class="text-primary">
            <span class="material-symbols-outlined">flag</span>
          </div>
          <div class="w-px bg-gray-200 flex-1"></div>
        </div>
        <div class="py-3">
          <p class="text-lg font-bold text-gray-900">Fundación del Distrito</p>
          <p class="text-sm font-medium text-gray-500">1925</p>
          <p class="mt-2 text-sm text-gray-600">
            Se establece oficialmente el distrito, marcando el inicio de nuestra historia como comunidad organizada.
          </p>
        </div>

        {{-- Punto 2 --}}
        <div class="flex flex-col items-center">
          <div class="w-px bg-gray-200 h-2"></div>
          <div class="text-primary">
            <span class="material-symbols-outlined">domain</span>
          </div>
          <div class="w-px bg-gray-200 flex-1"></div>
        </div>
        <div class="py-3">
          <p class="text-lg font-bold text-gray-900">Inauguración del Palacio Municipal</p>
          <p class="text-sm font-medium text-gray-500">1958</p>
          <p class="mt-2 text-sm text-gray-600">
            Se inaugura el nuevo centro administrativo, un símbolo de progreso y servicio a la ciudadanía.
          </p>
        </div>

        {{-- Punto 3 --}}
        <div class="flex flex-col items-center">
          <div class="w-px bg-gray-200 h-2"></div>
          <div class="text-primary">
            <span class="material-symbols-outlined">map</span>
          </div>
          <div class="w-px bg-gray-200 flex-1"></div>
        </div>
        <div class="py-3">
          <p class="text-lg font-bold text-gray-900">Lanzamiento del Plan de Desarrollo Urbano</p>
          <p class="text-sm font-medium text-gray-500">1992</p>
          <p class="mt-2 text-sm text-gray-600">
            Un ambicioso plan que moderniza la infraestructura y planifica el crecimiento sostenible de la ciudad.
          </p>
        </div>

        {{-- Punto 4 --}}
        <div class="flex flex-col items-center pb-3">
          <div class="w-px bg-gray-200 h-2"></div>
          <div class="text-green-600">
            <span class="material-symbols-outlined">eco</span>
          </div>
        </div>
        <div class="py-3">
          <p class="text-lg font-bold text-green-700">Creación del Parque Central Sostenible</p>
          <p class="text-sm font-medium text-gray-500">2015</p>
          <p class="mt-2 text-sm text-gray-600">
            Un hito ecológico que proporciona un pulmón verde para la ciudad y promueve la biodiversidad.
          </p>
        </div>
      </div>

      {{-- Galería histórica --}}
      <h2 class="text-[22px] font-bold tracking-tight border-t border-gray-200 pt-5 pb-3">
        Galería Histórica
      </h2>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="flex flex-col gap-2 group">
          <div
            class="w-full aspect-video rounded-lg bg-center bg-cover bg-gray-200"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCVGoEMSqkxdJ6_SjzuMyh6pYSt-ShXT3iMtimetGNSWhaZcwA06CEZWIz06Gsg58DgL5YSnbhnGAFuVq7Aqffqh1cjI3FhAwEWSG5qHMYR2sCnc5vd_eOhyy5bR9FCm4U0zPhlbua4yyQ7y23wRB-avLFoiMlABCQ6l4223Y_SZPw1Jn5opnhJiUTpttLjHsYZyab5kDxtSuK9TpWkDbx4dxTb3kaJcKTy5eTInzn21bsg-ji1VsUcYWJBhGPWnjMKRIeaftOyiWfp');"
          ></div>
          <div>
            <p class="text-sm font-medium text-gray-900 group-hover:text-primary">
              Plaza Principal, 1940
            </p>
            <p class="text-xs text-gray-600">
              Una vista de la vida cotidiana en el corazón del distrito.
            </p>
          </div>
        </div>

        <div class="flex flex-col gap-2 group">
          <div
            class="w-full aspect-video rounded-lg bg-center bg-cover bg-gray-200"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAzowOEdx4Z8x6hjTO-2sjBs7mATjucQOY4xKfkEkUAH738gLuMlnAJCu_sPC1TPA5US5e26WvG9-Xylm4yfOk5KPV_7o3-pCA4h0A9IP0z5P3piD7VnjKC1do_bkiaDcnjlFEToay_Wr9OtAj_7WfBHlfT9HsWKpJ84d1dKr8LGqMZIHFVhFtS-30bNVGAmOe9LtISkcCTJgPFdj1CIeT0hLZCOZ_Kn3u1PuLpTIWvJDgdjG-LsY4i3P9YMWB_mE8D2EKYnXolqHy7');"
          ></div>
          <div>
            <p class="text-sm font-medium text-gray-900 group-hover:text-primary">
              Construcción del Puente
            </p>
            <p class="text-xs text-gray-600">
              Obreros trabajando en el principal conector vial de la ciudad.
            </p>
          </div>
        </div>

        <div class="flex flex-col gap-2 group">
          <div
            class="w-full aspect-video rounded-lg bg-center bg-cover bg-gray-200"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCjns1MnGQ8ONOB3YJWkT5BoN_OAdPt8YY-aiigsLi58ZK0uZFfmsSgwUWsHvk4Xto835btjPKEELHyUKcMbSNOk2GrmGVmcvQ8MGh10HdGwaidFzVbo8v6PoIVGpJJMVyU3IHfZ9lHNs_IlwFrvLXnD0GiBS6tIK_HLncMigvr3fTzmFmqLyfL62r7ZFIvt2ZZ7PGRRj3PqYhEsarKcxWhpzuK1CFvwNnPNy916umYReg2yxUdKjyryPyKabzS0-K8dSxwO6Vo2RFu');"
          ></div>
          <div>
            <p class="text-sm font-medium text-gray-900 group-hover:text-primary">
              Primer Desfile Cívico
            </p>
            <p class="text-xs text-gray-600">
              Escolares y autoridades marchando por la avenida principal.
            </p>
          </div>
        </div>

        <div class="flex flex-col gap-2 group">
          <div
            class="w-full aspect-video rounded-lg bg-center bg-cover bg-gray-200"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDWMWPbcdIAk_U9yIUSCuX72Y6MILQ4r36WvzfNwE8wUP0bLw2GsxZKOnfcRi0RvQsz98ExUUoiexw-d7vEHrcpiBadTXprlROVoIbENZdAmPFF-FSNSg1j20u3dadHKVxMQzksiXWwjEeqhy5Y-YB_7eUp9FE7YPcNI26CRa-RsFUIYe9DBGIkj9u-nlBPjl7Sq0oYZ_2HLRCzz5S2_QUndoGq7_hdKyDJc8rX4rpuPjoh5tA8-912NHu2KCkSNYKqgMxqaiNuQfOi');"
          ></div>
          <div>
            <p class="text-sm font-medium text-gray-900 group-hover:text-primary">
              Mercado Municipal Antiguo
            </p>
            <p class="text-xs text-gray-600">
              El centro de comercio y encuentro de la comunidad en los años 60.
            </p>
          </div>
        </div>
      </div>

      {{-- Cierre --}}
      <div class="mt-4 p-6 bg-gray-50 border-l-4 border-green-600 rounded-r-lg">
        <p class="text-lg font-semibold text-gray-900">
          Más de <span class="text-primary font-bold">99 años</span> trabajando por el desarrollo de nuestra comunidad.
        </p>
      </div>

    </div>
  </div>
@endsection
