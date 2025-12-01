@extends('layouts.municipal')

@section('title', 'Salud y Campañas')

@section('content')
  <section class="bg-light-gray py-10 md:py-14">
    <div class="mx-auto max-w-4xl px-4 md:px-6 lg:px-0">

      {{-- CABECERA: Título + botón volver --}}
      <div class="flex items-center gap-3 mb-6">
        <a href="{{ route('inicio') }}"
           class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-700 hover:bg-primary hover:text-white transition-colors">
          <span class="material-symbols-outlined text-xl">arrow_back</span>
        </a>
        <h1 class="text-2xl md:text-3xl font-extrabold text-primary">
          Salud y Campañas
        </h1>
      </div>

      <p class="text-sm md:text-base text-gray-600 mb-8">
        Aquí encontrarás las principales campañas de salud, jornadas de vacunación
        y acciones de prevención que realiza la Municipalidad Distrital de Choco
        junto a los establecimientos de salud del distrito.
      </p>

      {{-- CONTENEDOR PRINCIPAL --}}
      <div class="bg-white rounded-2xl shadow-sm p-4 md:p-6">
        <h2 class="text-lg md:text-xl font-bold text-primary mb-4 md:mb-6">
          Últimas Publicaciones
        </h2>

        <div class="space-y-4 md:space-y-5">

          {{-- CARD 1 --}}
          <article class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm flex flex-col md:flex-row">
            <div class="md:w-1/3">
              <img
                src="https://msi.gob.pe/portal/wp-content/uploads/2016/05/Vacunacion2016.jpg"
                alt="Jornada de Vacunación contra la Influenza"
                class="h-44 md:h-full w-full object-cover">
            </div>
            <div class="flex-1 p-4 md:p-5">
              <p class="text-xs font-semibold tracking-wide text-secondary uppercase mb-1">
                Vacunación
              </p>
              <h3 class="text-base md:text-lg font-semibold text-gray-900">
                Jornada de Vacunación contra la Influenza
              </h3>
              <p class="mt-2 text-sm text-gray-600">
                Protege a tu familia. Acércate al centro de salud del 15 al 20 de mayo
                para recibir la vacuna contra la influenza.
              </p>
            </div>
          </article>

          {{-- CARD 2 --}}
          <article class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm flex flex-col md:flex-row">
            <div class="md:w-1/3">
              <img
                src="https://lh3.googleusercontent.com/rd-gg-dl/ABS2GSntql9Bg6c7s4WBR5OQ0E5ZodsMjFLzpyKMR7Dc4ScpyccaA49Elb666FBkbcz2WUKYkCzMT79UouQarCNSd65ReppuSKKgqPAsXsBeWjjXlFLyjTo3kIp-ZdiZNqzT3KsMd7nweiDWj1DCVFQPwj9KKP-1LhXEQhYumcYzwvhxOmQaKX-x5IWrjSIqVI--gjTFAYtRwnT_4NwYOD01hYLYHyWqm93NgYmXXTM2kdEnVQr2_OiIcMazOfCKJaa38-LuK1Mv1r2TRLeKPTMu319W4hLwCn1D9CFG2hgipTstvRD3UQwGsQ82Miw4ZCQRd5m3v52dA9K6dc1P6-8mKyCXGF-I9k9ed19fiKTW3B80jNyrF7wShlhgzuMFQ_tGXgFRgPh4C-EhDwPZuHqUGqLLkpRIQkjyJISyX94TrACSZZZBqVkf5ONpG6NX00yyr2npw4LsXag0OM4ViBWn7ZmnpJ3DAP77AW2w7BZFS6VHC_7jSqXQo2tjp-HJcF3qcm5GGlgEEcnTPQmmGeHv0qBJ2nhabMeQhT1PEBuhJrbdrZPeRWdiMnKajUbHoVKNp6I6NlzfzzwJrEtFJMI5islM2FOvAvyMC9MFz1WB_vqSBWwr9zVtagux0DD1xawMRYQoc8E2Sya5KMxiTs_aeAcYdZ3qVqSvH0C-hDqp7X1Daq3OCNWRAdmsoFowq7hj6NxTjz3KSShB9xCuUWIquR8HJrOM_TGaf_UkXDZa_0-OrhhH9ctTKPLWzRD2BfSyqXL5-E659QEhiVPwnrNIlnsFxcFgehvYqHU8MCcSeTmqY8MYoScQacTGSKTNYx132J-4WifhtHcAq-zZD1_Yc52vVzahyHDKy0rJU-gsRc_ExbWJ6f-YeQj4HO0n60Kt9WX0rnEIp7_e0GQuODKPxniXV9Uju5SRzOu48HEonDzL1MHIH6jaPYT1E_wQK-js7zkxAi5uBeSkT9LpRYbjwTHwnX3rypErqYNh22tNS7AlyMVLn53gvpkY2-ByrRTuewpiTo0F5D1LgUudGBabl9NGSSHjNbcTnD6KGGOHfkG4sMSoMTLttY6cdOzBWwDr8MMv0GHk8qEOSx511n_MjCM-8xKOf2E3HnnSvbhwm49Mj68Hcr-I3qRRyL4Kx6ov9vYv-uuv23CNbK7lk_1uNWqa80nW09UpMzYtg03Tqp-OC4DYaZC8eyTN6TsqbRkcZGuG7-nTZzZ0jQ6_lwdXc3KY7ErmT93DSPU6k9Xu4EH0AB5zlw6Pg8GNVAvq_F1jiDW6V7ZAJNaEkg7b3nh54YU4r442mE2JJNGa=s1024-rj?authuser=1"
                alt="Campaña de prevención del dengue"
                class="h-44 md:h-full w-full object-cover">
            </div>
            <div class="flex-1 p-4 md:p-5">
              <p class="text-xs font-semibold tracking-wide text-rose-500 uppercase mb-1">
                Prevención Dengue
              </p>
              <h3 class="text-base md:text-lg font-semibold text-gray-900">
                ¡Todos contra el Dengue! Elimina criaderos
              </h3>
              <p class="mt-2 text-sm text-gray-600">
                Revisa tu patio y elimina cualquier recipiente que pueda acumular
                agua. La prevención es tarea de todos para evitar el dengue.
              </p>
            </div>
          </article>

          {{-- CARD 3 --}}
          <article class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm flex flex-col md:flex-row">
            <div class="md:w-1/3">
              <img
                src="https://lh3.googleusercontent.com/rd-gg-dl/ABS2GSlXF6YZ93WFCHj1JJBPEJYHdM5x1YIOt4pom5CBSBH-L5CH5ckgroRIIOK-iXmVrwb-xCFFk2tUkw_yHJkfC43YD2QPhhFRFY0hQMJkfzJoEmk2SWq4E7fKe7fNipGlSgIHfM_2b-Z7dwMLPxWGoPLIExQ7ewhdawBdvwP6xcefFNExB5irqaay_2FeTSr1qfSQE6wXfEWztPIkuLYmM_BGu-5LZ5eOvY2HEriBJK0GzrUugv1fdPSt-XElkqB08KYz5StkeXW3o4mzmyTmrpRa3Hem3n2rGfhIIQ31YS2ySyypvibTfkxrHdIbW1Wk0GvZSH-KWWuM2OMZKPsxgxDIPkQkEi8Orlk2WmirfTi-U_wOM9xs2-mmA57jio6MCBKyYtik2gZ22dvpYjbpnLbQA5_3HiM-D7rR5AYwmce8Hjhl4exKRzG9wXUxxVVB6DRMWWfHsblU9vWZc9oJYnbqI4Hjz5dNg2phoZpEK1WeBGNRrPXI1mmOkjC01GKKH1YFQZ8o8mnt6NdLz9ckG6gtOPgHtDKlZldlaPs-t1Mh-duuPJFkIXQ8wBFHXbqBOIqwGZGY4gPizfeXNOAqcVhbd4GFf22PV5Gk_42DUYTamlvDRtdnIoPp6t0VMzh9leJBMNk4BzQlNXRTMmhQw1igxLIFsnHlboXkZ0UtS9rSs18fYtngN3Koi6dYpvaD9vxVo06TP2db-ygwBOMZK_MkHW2HffxblNUrDLx2EYXPD9InFZtDqDSzxLtQ5tyjxv_1udHprxRTZmBeYHy811GN0MOkVwK9wQnv3zPmv2Yf7ICKDlO2XRk_8LUp22MV06sxQtcxpm7hiGKj79dlk340UGSHYJCJym7svJXYvZzXmdPE6QGqnaNRhmzzEQ4csq11RT5Yo36wHnPejBPPUVeQyboSldisY8CkZcgkMlGNlDC1XUbs0Nt2MvcrheAtaCd50l9euUIThevHQz3dZ-yT1uNHlPYvJL74MO1HZ7oMOui_XGicQu4xQPyScfCv18i_ZKROj3CtRk2tsQJTKDk6c9z3cLwN6EEHdg4aBgyFKK9qS_DLgDlS1FM4eoz7QXVWrbs0EvPH0UaHjphiAJxAyd6Z1PV4xOuCsYjybKVQpsQeaHpLYV8n4RqKvmSRGgvd7fmWEe3a3vtJvPoerL4rETVskM2up4MWkCkicG8SNAumbj45VzNgwWJ-oDanpfaoKgmROaVKwzqPOpny7cZzrZ7DDjnFDdH65iCCBZIsDfBAH8XuhF9wMOu1KE-ERpr8j7-CAqz83Ju1VJkiVW1rPhPkY3RbgUPS=s1024-rj?authuser=1"
                alt="Campaña de limpieza comunitaria"
                class="h-44 md:h-full w-full object-cover">
            </div>
            <div class="flex-1 p-4 md:p-5">
              <p class="text-xs font-semibold tracking-wide text-emerald-500 uppercase mb-1">
                Limpieza
              </p>
              <h3 class="text-base md:text-lg font-semibold text-gray-900">
                Campaña de Limpieza Comunitaria
              </h3>
              <p class="mt-2 text-sm text-gray-600">
                Únete este sábado a la jornada de limpieza en el barrio El Centro.
                ¡Juntos por un Choco más ordenado y saludable!
              </p>
            </div>
          </article>

        </div>
      </div>
    </div>
  </section>
@endsection
