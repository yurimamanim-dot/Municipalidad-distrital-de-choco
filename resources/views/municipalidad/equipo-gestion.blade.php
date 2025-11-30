@extends('layouts.municipal')

@section('title', 'Equipo de Gestión - Municipalidad')

@section('content')
<div class="bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 space-y-10">

        {{-- Migas de pan --}}
        <nav class="flex flex-wrap items-center gap-2 text-sm mb-2">
            <a href="{{ route('inicio') }}"
               class="font-medium text-gray-500 hover:text-secondary transition-colors">
                INICIO
            </a>
            <span class="text-gray-400">/</span>
            <a href="{{ route('la-municipalidad') }}"
               class="font-medium text-gray-500 hover:text-secondary transition-colors">
                TU MUNICIPALIDAD
            </a>
            <span class="text-gray-400">/</span>
            <span class="font-bold text-primary">
                EQUIPO
            </span>
        </nav>

        {{-- Encabezado --}}
        <section class="text-center space-y-3">
            <h1 class="text-primary text-3xl md:text-5xl font-black leading-tight tracking-tight">
                Equipo de Gestión
            </h1>
            <p class="text-sm md:text-base text-gray-500 max-w-2xl mx-auto">
                Conoce a las autoridades y funcionarios que lideran la gestión de la municipalidad.
            </p>
        </section>

        {{-- Grid del equipo --}}
        <section>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Tarjeta 1 --}}
                <article
                    class="flex flex-col gap-4 text-center bg-white rounded-xl border border-gray-200 p-6 shadow-sm
                           hover:shadow-lg hover:-translate-y-1 hover:border-primary/50 transition-all duration-200
                           focus-within:ring-2 focus-within:ring-primary/40">
                    <div>
                        <div class="w-36 h-36 mx-auto rounded-full border-4 border-primary bg-center bg-cover bg-no-repeat"
                             aria-label="Fotografía de Lucía Mendoza Rojas"
                             style='background-image:url("https://lh3.googleusercontent.com/aida-public/AB6AXuDPmRamh1DrHQ3HwGRbH5_rMj0gjRwl0pvzAZ0SLDI7vPhvgV2FXJxODfZ2uh8BnQxpeKyr_m_7J1Z0Ms9PT3fRPSHSwXp-mmqWK2HktReHPQBAqeU4kjW9__VyVKuIIAJSmGizSVQ4EBEiFYlQM5FLGajqZz5WR-O_Rv6F83dyW9j4ASkYgosbRaErXmyzc6e3iOj-LiHSQpt8QhoGzHa5EpeoN3AbmFProhL5Ov0ZK0EBxZSBx2M1cV1J32vHGYymPDdBwH6VLrTO");'>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1 flex flex-col">
                        <h3 class="text-gray-800 text-lg md:text-xl font-bold">
                            Eva Elizabeth Chura Quicaña
                        </h3>
                        <p class="inline-flex items-center justify-center mx-auto px-3 py-1 rounded-full bg-primary/5 text-primary text-xs md:text-sm font-semibold uppercase tracking-wide">
                            Alcaldesa
                        </p>
                        <p class="text-gray-500 text-sm flex-1">
                            Liderando con visión y compromiso para construir un distrito más próspero y equitativo para todos.
                        </p>
                    </div>
                </article>

                {{-- Tarjeta 2 --}}
                <article
                    class="flex flex-col gap-4 text-center bg-white rounded-xl border border-gray-200 p-6 shadow-sm
                           hover:shadow-lg hover:-translate-y-1 hover:border-primary/50 transition-all duration-200
                           focus-within:ring-2 focus-within:ring-primary/40">
                    <div>
                        <div class="w-36 h-36 mx-auto rounded-full border-4 border-primary bg-center bg-cover bg-no-repeat"
                             aria-label="Fotografía de Carlos Benavides Solano"
                             style='background-image:url("https://lh3.googleusercontent.com/aida-public/AB6AXuDKloCXP8bntVriF2posjZagfZsilVlb2d4nKtrlAhnPqrE9Un5VoGZU72JYX7-XFl9zHmBloRkyS_-XranvlbDYQv-2WaphpqyPqNcALryO6uwSo0WDVY0aQgsbszS-vvQEM3vGnu4qwuxCL0wMy3Iw7918-Lfs1ExuI2p3AxPVJyyV7r_bLwO8iGnGp2uRUsIrVYeOj9Pe_N_sD8nZxyq68uZMM4y_yRyEMN0rU3YvK8Rgsg7x2AFTheTaIN0lQzOI629RV13IfML");'>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1 flex flex-col">
                        <h3 class="text-gray-800 text-lg md:text-xl font-bold">
                            Carlos Benavides Solano
                        </h3>
                        <p class="inline-flex items-center justify-center mx-auto px-3 py-1 rounded-full bg-primary/5 text-primary text-xs md:text-sm font-semibold uppercase tracking-wide">
                            Gerente Municipal
                        </p>
                        <p class="text-gray-500 text-sm flex-1">
                            Responsable de la gestión administrativa y la ejecución de las políticas municipales aprobadas.
                        </p>
                    </div>
                </article>

                {{-- Tarjeta 3 --}}
                <article
                    class="flex flex-col gap-4 text-center bg-white rounded-xl border border-gray-200 p-6 shadow-sm
                           hover:shadow-lg hover:-translate-y-1 hover:border-primary/50 transition-all duration-200
                           focus-within:ring-2 focus-within:ring-primary/40">
                    <div>
                        <div class="w-36 h-36 mx-auto rounded-full border-4 border-primary bg-center bg-cover bg-no-repeat"
                             aria-label="Fotografía de Ricardo Palma Gutiérrez"
                             style='background-image:url("https://lh3.googleusercontent.com/aida-public/AB6AXuBZvlB69b9-kr2fxQ8ReWNdtuVZd0BZ8YkA09IQBszsJHPx8mX4LdsFpNTir6hFNZzU3JSmTwmKhaYcFqqFRlzafBjS0t1-s-ntbD_v2RhB_1uCq54PZdjU8hqgNy50rXcfy97Zx0tnIXSVm3y4NrSupfZdGiqcqJffZ_cKxbfpWhRKyfstaA3sEUioLJjtdoo4cU3MKPrZ1PRibd7Mn9BZZkFv7PGn-HkSU5m6yn97FrgVdwoBVIT0bgBFayqAuTTa_n7mi1_cth-P");'>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1 flex flex-col">
                        <h3 class="text-gray-800 text-lg md:text-xl font-bold">
                            Ricardo Palma Gutiérrez
                        </h3>
                        <p class="inline-flex items-center justify-center mx-auto px-3 py-1 rounded-full bg-primary/5 text-primary text-xs md:text-sm font-semibold uppercase tracking-wide">
                            Gerente de Desarrollo Urbano
                        </p>
                        <p class="text-gray-500 text-sm flex-1">
                            Encargado de la planificación y supervisión del crecimiento ordenado de nuestro distrito.
                        </p>
                    </div>
                </article>

                {{-- Tarjeta 4 --}}
                <article
                    class="flex flex-col gap-4 text-center bg-white rounded-xl border border-gray-200 p-6 shadow-sm
                           hover:shadow-lg hover:-translate-y-1 hover:border-primary/50 transition-all duration-200
                           focus-within:ring-2 focus-within:ring-primary/40">
                    <div>
                        <div class="w-36 h-36 mx-auto rounded-full border-4 border-primary bg-center bg-cover bg-no-repeat"
                             aria-label="Fotografía de Sofía Torres del Valle"
                             style='background-image:url("https://lh3.googleusercontent.com/aida-public/AB6AXuBUew0N7aH2b_rltM81F4Zuq1pAvw2tJIunPa0ABnv73siXQwBSVmtPZBI92uPzdL0sKBRhz8UF3j01BE66nzS8IqMnDszhJwCkAFv6CNQ2Stn_XE7sFgAS6hJg2W75GEFZyOInOVYDoMMexYe7Sg2XWlXKlV98zcEAKPevoDPI9O25bP1I5xF7VJHyuZD6UNEIPbzuUPVG7Fy_Nw-LyEj1mB0vvwCY2q9HkNVFDwfhUzcXLeWkmt_98neWUVVmnoHOQa7Yc_0R26gn");'>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1 flex flex-col">
                        <h3 class="text-gray-800 text-lg md:text-xl font-bold">
                            Sofía Torres del Valle
                        </h3>
                        <p class="inline-flex items-center justify-center mx-auto px-3 py-1 rounded-full bg-primary/5 text-primary text-xs md:text-sm font-semibold uppercase tracking-wide">
                            Gerenta de Servicios Sociales
                        </p>
                        <p class="text-gray-500 text-sm flex-1">
                            Dedicada a fortalecer los programas de inclusión y bienestar para nuestra comunidad.
                        </p>
                    </div>
                </article>

                {{-- Tarjeta 5 --}}
                <article
                    class="flex flex-col gap-4 text-center bg-white rounded-xl border border-gray-200 p-6 shadow-sm
                           hover:shadow-lg hover:-translate-y-1 hover:border-primary/50 transition-all duration-200
                           focus-within:ring-2 focus-within:ring-primary/40">
                    <div>
                        <div class="w-36 h-36 mx-auto rounded-full border-4 border-primary bg-center bg-cover bg-no-repeat"
                             aria-label="Fotografía de Alberto Ríos Cárdenas"
                             style='background-image:url("https://lh3.googleusercontent.com/aida-public/AB6AXuDm-wI1WT2ajgHBd-mQr70QsPDM7-tspNj8qmIGX8h6uVZzQzC5HyZ1TsZGq120y1dWRsh47DuxRvla_ysufGtpm16z7mYF0u2uGF8mYWt2Ykq4msCcBlE5WznBera0a4m894HPZZgmICKpX4n9uLasTfD9d0JDcjfy6tkdOhPpYK6REor-GOpTW1o_QJgJpoeKeZOXXSloUQL3svyUNh7JnROyKMK2900Tsc7FovAMyFHRRJfHi_v90MysgtDNZ3sukFrH1sJXB2fH");'>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1 flex flex-col">
                        <h3 class="text-gray-800 text-lg md:text-xl font-bold">
                            Alberto Ríos Cárdenas
                        </h3>
                        <p class="inline-flex items-center justify-center mx-auto px-3 py-1 rounded-full bg-primary/5 text-primary text-xs md:text-sm font-semibold uppercase tracking-wide">
                            Gerente de Administración
                        </p>
                        <p class="text-gray-500 text-sm flex-1">
                            Garantizando el uso eficiente y transparente de los recursos para el beneficio de los ciudadanos.
                        </p>
                    </div>
                </article>

                {{-- Tarjeta 6 --}}
                <article
                    class="flex flex-col gap-4 text-center bg-white rounded-xl border border-gray-200 p-6 shadow-sm
                           hover:shadow-lg hover:-translate-y-1 hover:border-primary/50 transition-all duration-200
                           focus-within:ring-2 focus-within:ring-primary/40">
                    <div>
                        <div class="w-36 h-36 mx-auto rounded-full border-4 border-primary bg-center bg-cover bg-no-repeat"
                             aria-label="Fotografía de Elena Vásquez Flores"
                             style='background-image:url("https://lh3.googleusercontent.com/aida-public/AB6AXuBdzrx1W1tLBf-auqihtpHAotO0L2dh46PPwtFDgdle6iqwjpCpC6xgHzPn6fbFaC2nDq6tUZ-khR9HJt2CQjSCV2mqvle2bKhW1etjzKtAR72E0VxoR3ueLmMJ4JX4yTTRrq74efo-fDeJQ2wqJpWx4qcKqG8Z2P51hwqWTIU6hyf0MxcvDUcdUAKuBb49FB_xcItxPuZ8_D1wXv9W_6h5qGmROYWSnQAGRawV0DWy1Pr-l5VY7yAMSToSQrAdl8N9Zl5SqPiGMLFc");'>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1 flex flex-col">
                        <h3 class="text-gray-800 text-lg md:text-xl font-bold">
                            Elena Vásquez Flores
                        </h3>
                        <p class="inline-flex items-center justify-center mx-auto px-3 py-1 rounded-full bg-primary/5 text-primary text-xs md:text-sm font-semibold uppercase tracking-wide">
                            Gerenta de Medio Ambiente
                        </p>
                        <p class="text-gray-500 text-sm flex-1">
                            Impulsando iniciativas para la protección y conservación de nuestro entorno natural.
                        </p>
                    </div>
                </article>

            </div>
        </section>

        {{-- Frase final --}}
        <section class="pb-4 pt-2">
            <h3 class="text-primary text-xl md:text-2xl font-bold text-center leading-snug px-2">
                Un equipo comprometido con el desarrollo del distrito.
            </h3>
        </section>

    </div>
</div>
@endsection
