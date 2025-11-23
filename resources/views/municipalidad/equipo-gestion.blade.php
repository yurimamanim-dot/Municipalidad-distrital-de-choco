@extends('layouts.municipal')

@section('title', 'Equipo de Gestión - Municipalidad')

@section('content')
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden bg-white">
    <div class="layout-container flex h-full grow flex-col">
        <div class="flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col w-full max-w-6xl px-4 sm:px-6 lg:px-8">
                
                <!-- Migas de pan (Opcional, para consistencia) -->
                <div class="flex flex-wrap gap-2 px-4 py-2 mb-4">
                    <a class="text-gray-500 text-sm font-medium hover:text-secondary transition-colors" href="{{ route('inicio') }}">INICIO</a>
                    <span class="text-gray-400 text-sm font-medium">/</span>
                    <a class="text-gray-500 text-sm font-medium hover:text-secondary transition-colors" href="{{ route('la-municipalidad') }}">TU MUNICIPALIDAD</a>
                    <span class="text-gray-400 text-sm font-medium">/</span>
                    <span class="text-gray-900 text-sm font-medium">EQUIPO</span>
                </div>

                <main class="flex flex-col gap-8 md:gap-12 py-8 md:py-12">
                    <!-- PageHeading -->
                    <div class="flex flex-wrap justify-center text-center gap-3 p-4">
                        <h1 class="text-primary text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">Equipo de Gestión</h1>
                    </div>
                    
                    <!-- ImageGrid -->
                    <div class="bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 rounded-xl">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                            
                            <!-- Tarjeta 1 -->
                            <div class="flex flex-col gap-4 text-center pb-3 bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="px-4">
                                    <div class="w-40 h-40 mx-auto bg-center bg-no-repeat aspect-square bg-cover rounded-full border-4 border-primary" data-alt="Fotografía de Lucía Mendoza Rojas" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDPmRamh1DrHQ3HwGRbH5_rMj0gjRwl0pvzAZ0SLDI7vPhvgV2FXJxODfZ2uh8BnQxpeKyr_m_7J1Z0Ms9PT3fRPSHSwXp-mmqWK2HktReHPQBAqeU4kjW9__VyVKuIIAJSmGizSVQ4EBEiFYlQM5FLGajqZz5WR-O_Rv6F83dyW9j4ASkYgosbRaErXmyzc6e3iOj-LiHSQpt8QhoGzHa5EpeoN3AbmFProhL5Ov0ZK0EBxZSBx2M1cV1J32vHGYymPDdBwH6VLrTO");'></div>
                                </div>
                                <div class="flex flex-col gap-2 flex-grow">
                                    <h3 class="text-gray-800 text-xl font-bold leading-normal">Lucía Mendoza Rojas</h3>
                                    <p class="text-primary text-base font-medium leading-normal">Alcaldesa</p>
                                    <p class="text-gray-500 text-sm font-normal leading-normal flex-grow">Liderando con visión y compromiso para construir un distrito más próspero y equitativo para todos.</p>
                                </div>
                            </div>

                            <!-- Tarjeta 2 -->
                            <div class="flex flex-col gap-4 text-center pb-3 bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="px-4">
                                    <div class="w-40 h-40 mx-auto bg-center bg-no-repeat aspect-square bg-cover rounded-full border-4 border-primary" data-alt="Fotografía de Carlos Benavides Solano" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDKloCXP8bntVriF2posjZagfZsilVlb2d4nKtrlAhnPqrE9Un5VoGZU72JYX7-XFl9zHmBloRkyS_-XranvlbDYQv-2WaphpqyPqNcALryO6uwSo0WDVY0aQgsbszS-vvQEM3vGnu4qwuxCL0wMy3Iw7918-Lfs1ExuI2p3AxPVJyyV7r_bLwO8iGnGp2uRUsIrVYeOj9Pe_N_sD8nZxyq68uZMM4y_yRyEMN0rU3YvK8Rgsg7x2AFTheTaIN0lQzOI629RV13IfML");'></div>
                                </div>
                                <div class="flex flex-col gap-2 flex-grow">
                                    <h3 class="text-gray-800 text-xl font-bold leading-normal">Carlos Benavides Solano</h3>
                                    <p class="text-primary text-base font-medium leading-normal">Gerente Municipal</p>
                                    <p class="text-gray-500 text-sm font-normal leading-normal flex-grow">Responsable de la gestión administrativa y la ejecución de las políticas municipales aprobadas.</p>
                                </div>
                            </div>

                            <!-- Tarjeta 3 -->
                            <div class="flex flex-col gap-4 text-center pb-3 bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="px-4">
                                    <div class="w-40 h-40 mx-auto bg-center bg-no-repeat aspect-square bg-cover rounded-full border-4 border-primary" data-alt="Fotografía de Ricardo Palma Gutiérrez" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBZvlB69b9-kr2fxQ8ReWNdtuVZd0BZ8YkA09IQBszsJHPx8mX4LdsFpNTir6hFNZzU3JSmTwmKhaYcFqqFRlzafBjS0t1-s-ntbD_v2RhB_1uCq54PZdjU8hqgNy50rXcfy97Zx0tnIXSVm3y4NrSupfZdGiqcqJffZ_cKxbfpWhRKyfstaA3sEUioLJjtdoo4cU3MKPrZ1PRibd7Mn9BZZkFv7PGn-HkSU5m6yn97FrgVdwoBVIT0bgBFayqAuTTa_n7mi1_cth-P");'></div>
                                </div>
                                <div class="flex flex-col gap-2 flex-grow">
                                    <h3 class="text-gray-800 text-xl font-bold leading-normal">Ricardo Palma Gutiérrez</h3>
                                    <p class="text-primary text-base font-medium leading-normal">Gerente de Desarrollo Urbano</p>
                                    <p class="text-gray-500 text-sm font-normal leading-normal flex-grow">Encargado de la planificación y supervisión del crecimiento ordenado de nuestro distrito.</p>
                                </div>
                            </div>

                            <!-- Tarjeta 4 -->
                            <div class="flex flex-col gap-4 text-center pb-3 bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="px-4">
                                    <div class="w-40 h-40 mx-auto bg-center bg-no-repeat aspect-square bg-cover rounded-full border-4 border-primary" data-alt="Fotografía de Sofía Torres del Valle" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBUew0N7aH2b_rltM81F4Zuq1pAvw2tJIunPa0ABnv73siXQwBSVmtPZBI92uPzdL0sKBRhz8UF3j01BE66nzS8IqMnDszhJwCkAFv6CNQ2Stn_XE7sFgAS6hJg2W75GEFZyOInOVYDoMMexYe7Sg2XWlXKlV98zcEAKPevoDPI9O25bP1I5xF7VJHyuZD6UNEIPbzuUPVG7Fy_Nw-LyEj1mB0vvwCY2q9HkNVFDwfhUzcXLeWkmt_98neWUVVmnoHOQa7Yc_0R26gn");'></div>
                                </div>
                                <div class="flex flex-col gap-2 flex-grow">
                                    <h3 class="text-gray-800 text-xl font-bold leading-normal">Sofía Torres del Valle</h3>
                                    <p class="text-primary text-base font-medium leading-normal">Gerenta de Servicios Sociales</p>
                                    <p class="text-gray-500 text-sm font-normal leading-normal flex-grow">Dedicada a fortalecer los programas de inclusión y bienestar para nuestra comunidad.</p>
                                </div>
                            </div>

                            <!-- Tarjeta 5 -->
                            <div class="flex flex-col gap-4 text-center pb-3 bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="px-4">
                                    <div class="w-40 h-40 mx-auto bg-center bg-no-repeat aspect-square bg-cover rounded-full border-4 border-primary" data-alt="Fotografía de Alberto Ríos Cárdenas" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDm-wI1WT2ajgHBd-mQr70QsPDM7-tspNj8qmIGX8h6uVZzQzC5HyZ1TsZGq120y1dWRsh47DuxRvla_ysufGtpm16z7mYF0u2uGF8mYWt2Ykq4msCcBlE5WznBera0a4m894HPZZgmICKpX4n9uLasTfD9d0JDcjfy6tkdOhPpYK6REor-GOpTW1o_QJgJpoeKeZOXXSloUQL3svyUNh7JnROyKMK2900Tsc7FovAMyFHRRJfHi_v90MysgtDNZ3sukFrH1sJXB2fH");'></div>
                                </div>
                                <div class="flex flex-col gap-2 flex-grow">
                                    <h3 class="text-gray-800 text-xl font-bold leading-normal">Alberto Ríos Cárdenas</h3>
                                    <p class="text-primary text-base font-medium leading-normal">Gerente de Administración</p>
                                    <p class="text-gray-500 text-sm font-normal leading-normal flex-grow">Garantizando el uso eficiente y transparente de los recursos para el beneficio de los ciudadanos.</p>
                                </div>
                            </div>

                            <!-- Tarjeta 6 -->
                            <div class="flex flex-col gap-4 text-center pb-3 bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="px-4">
                                    <div class="w-40 h-40 mx-auto bg-center bg-no-repeat aspect-square bg-cover rounded-full border-4 border-primary" data-alt="Fotografía de Elena Vásquez Flores" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBdzrx1W1tLBf-auqihtpHAotO0L2dh46PPwtFDgdle6iqwjpCpC6xgHzPn6fbFaC2nDq6tUZ-khR9HJt2CQjSCV2mqvle2bKhW1etjzKtAR72E0VxoR3ueLmMJ4JX4yTTRrq74efo-fDeJQ2wqJpWx4qcKqG8Z2P51hwqWTIU6hyf0MxcvDUcdUAKuBb49FB_xcItxPuZ8_D1wXv9W_6h5qGmROYWSnQAGRawV0DWy1Pr-l5VY7yAMSToSQrAdl8N9Zl5SqPiGMLFc");'></div>
                                </div>
                                <div class="flex flex-col gap-2 flex-grow">
                                    <h3 class="text-gray-800 text-xl font-bold leading-normal">Elena Vásquez Flores</h3>
                                    <p class="text-primary text-base font-medium leading-normal">Gerenta de Medio Ambiente</p>
                                    <p class="text-gray-500 text-sm font-normal leading-normal flex-grow">Impulsando iniciativas para la protección y conservación de nuestro entorno natural.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <div class="py-8 md:py-12">
                        <h3 class="text-primary tracking-light text-2xl md:text-3xl font-bold leading-tight px-4 text-center">Un equipo comprometido con el desarrollo del distrito.</h3>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection