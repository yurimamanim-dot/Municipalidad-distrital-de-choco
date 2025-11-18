<!DOCTYPE html>
<html class="light" lang="es">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Tu Municipalidad - Municipalidad de Ate</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com" rel="preconnect"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#003366",
            "secondary": "#00AEEF",
            "green-sustainability": "#28a745",
            "background-light": "#F8F9FA",
            "background-dark": "#0f1923",
            "text-light": "#101418",
            "text-dark": "#f5f7f8",
            "subtle-light": "#5e758d",
            "subtle-dark": "#a0aec0",
            "border-light": "#dae0e7",
            "border-dark": "#3e4c5a"
          },
          fontFamily: {
            "display": ["Public Sans", "sans-serif"]
          },
          borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
        },
      },
    }
  </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
  <div class="layout-container flex h-full grow flex-col">

    {{-- HEADER --}}
    <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-border-light dark:border-border-dark px-4 sm:px-10 py-3 bg-white dark:bg-background-dark/80 sticky top-0 z-50 backdrop-blur-sm">
      <div class="flex items-center gap-4 text-primary dark:text-secondary">
        <div class="size-6">
          <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
            <path d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z" fill="currentColor"></path>
          </svg>
        </div>
        <h1 class="text-text-light dark:text-text-dark text-lg font-bold tracking-[-0.015em]">
          MUNICIPALIDAD DE ATE
        </h1>
      </div>

      <nav class="hidden lg:flex flex-1 justify-end gap-8">
        <div class="flex items-center gap-9">
          {{-- INICIO --}}
          <a class="text-text-light dark:text-text-dark text-sm font-medium hover:text-secondary dark:hover:text-secondary"
             href="{{ route('inicio') }}">
            INICIO
          </a>

          {{-- MESA DE PARTES (ajusta al nombre real de tu ruta si es distinto) --}}
          <a class="text-text-light dark:text-text-dark text-sm font-medium hover:text-secondary dark:hover:text-secondary"
             href="{{ route('mesa') }}">
            MESA DE PARTES
          </a>

          {{-- TU MUNICIPALIDAD --}}
          <a class="text-secondary dark:text-secondary text-sm font-bold"
             href="{{ route('la-municipalidad') }}">
            TU MUNICIPALIDAD
          </a>

          {{-- TRÁMITES (cuando tengas ruta la cambias) --}}
          <a class="text-text-light dark:text-text-dark text-sm font-medium hover:text-secondary dark:hover:text-secondary"
             href="#">
            TRÁMITES
          </a>

          {{-- NOTICIAS (si ya tienes noticias.index) --}}
          <a class="text-text-light dark:text-text-dark text-sm font-medium hover:text-secondary dark:hover:text-secondary"
             href="{{ route('noticias.index') }}">
            NOTICIAS
          </a>

          {{-- CONTACTO (por ahora #) --}}
          <a class="text-text-light dark:text-text-dark text-sm font-medium hover:text-secondary dark:hover:text-secondary"
             href="#">
            CONTACTO
          </a>
        </div>

        <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 transition-colors">
          <span class="truncate">PORTAL DE TRANSPARENCIA</span>
        </button>
      </nav>

      <button class="lg:hidden text-text-light dark:text-text-dark">
        <span class="material-symbols-outlined">menu</span>
      </button>
    </header>

    {{-- CONTENIDO --}}
    <main class="px-4 sm:px-10 lg:px-20 xl:px-40 flex flex-1 justify-center py-5">
      <div class="layout-content-container flex flex-col max-w-5xl flex-1 w-full gap-8">

        <div class="flex flex-wrap gap-2 px-4 py-2">
          <a class="text-subtle-light dark:text-subtle-dark text-sm font-medium hover:text-secondary dark:hover:text-secondary"
             href="{{ route('inicio') }}">
            INICIO
          </a>
          <span class="text-subtle-light dark:text-subtle-dark text-sm font-medium">/</span>
          <span class="text-text-light dark:text-text-dark text-sm font-medium">TU MUNICIPALIDAD</span>
        </div>

        <div class="flex p-4 @container bg-white dark:bg-background-dark/80 rounded-xl shadow-sm">
          <div class="flex w-full flex-col gap-6 @[520px]:flex-row @[520px]:justify-between @[520px]:items-center">
            <div class="flex flex-col @[400px]:flex-row gap-6">
              <img class="aspect-square rounded-full h-32 w-32 object-cover mx-auto @[400px]:mx-0"
                   data-alt="Fotografía del alcalde Franco Vidal Morales"
                   src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4sME5haCkHEQMima8SElvqjiyDSHcSNNsSKd2dIokFnF0CD0CL21sv_Df4dy4G1-G3pE7j2HWBYfGLxq-vzaXrMcyygV_5ibuW7Na7HaRG4KlotYPz3PTT8ON18NgJ8KxROSvUNzcJVsWiYP5hbkuzR5yqZueKvlwRPWcnPLkDZMW-6dR-uMlYO-aUZYcRljHMQt-TIdoviNWo-0OxFLsU0dlVWMHQZpZWHPUAOSGEC9fHsqNwDNvs01QpcDWcgT3uYIoFPtnx8ab"/>
              <div class="flex flex-col justify-center text-center @[400px]:text-left">
                <p class="text-primary dark:text-secondary text-2xl font-black uppercase tracking-wide">
                  Franco Vidal Morales
                </p>
                <p class="text-subtle-light dark:text-subtle-dark text-base font-medium">
                  Alcalde de Ate
                </p>
                <p class="text-text-light dark:text-text-dark text-base font-normal leading-normal mt-2 max-w-md">
                  Bienvenidos al portal de la Municipalidad de Ate. Estamos comprometidos con el desarrollo y bienestar de nuestro distrito.
                </p>
              </div>
            </div>
          </div>
        </div>

        {{-- TARJETAS --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4">

          {{-- Misión --}}
          <a class="flex flex-col gap-3 rounded-xl border border-border-light dark:border-border-dark bg-white dark:bg-background-dark/80 p-6 transition-all hover:shadow-lg hover:-translate-y-1 group"
             href="{{ route('mision') }}">
            <span class="material-symbols-outlined text-primary dark:text-secondary text-3xl">target</span>
            <div class="flex flex-col gap-1">
              <h2 class="text-text-light dark:text-text-dark text-lg font-bold uppercase group-hover:text-primary dark:group-hover:text-secondary">
                Nuestra Misión
              </h2>
              <p class="text-subtle-light dark:text-subtle-dark text-sm font-normal leading-normal">
                Conoce nuestro propósito fundamental y compromiso con la comunidad.
              </p>
            </div>
          </a>

          {{-- Visión --}}
          <a class="flex flex-col gap-3 rounded-xl border border-border-light dark:border-border-dark bg-white dark:bg-background-dark/80 p-6 transition-all hover:shadow-lg hover:-translate-y-1 group"
             href="{{ route('vision') }}">
            <span class="material-symbols-outlined text-primary dark:text-secondary text-3xl">rocket_launch</span>
            <div class="flex flex-col gap-1">
              <h2 class="text-text-light dark:text-text-dark text-lg font-bold uppercase group-hover:text-primary dark:group-hover:text-secondary">
                Nuestra Visión de Futuro
              </h2>
              <p class="text-subtle-light dark:text-subtle-dark text-sm font-normal leading-normal">
                Descubre nuestras aspiraciones y las metas que nos guían hacia adelante.
              </p>
            </div>
          </a>

          {{-- Historia --}}
          <a class="flex flex-col gap-3 rounded-xl border border-border-light dark:border-border-dark bg-white dark:bg-background-dark/80 p-6 transition-all hover:shadow-lg hover:-translate-y-1 group"
             href="{{ route('historia') }}">
            <span class="material-symbols-outlined text-primary dark:text-secondary text-3xl">history_edu</span>
            <div class="flex flex-col gap-1">
              <h2 class="text-text-light dark:text-text-dark text-lg font-bold uppercase group-hover:text-primary dark:group-hover:text-secondary">
                Nuestra Historia Municipal
              </h2>
              <p class="text-subtle-light dark:text-subtle-dark text-sm font-normal leading-normal">
                Un recorrido por los hitos más importantes de nuestro distrito.
              </p>
            </div>
          </a>

          {{-- Organigrama --}}
          <a class="flex flex-col gap-3 rounded-xl border border-border-light dark:border-border-dark bg-white dark:bg-background-dark/80 p-6 transition-all hover:shadow-lg hover:-translate-y-1 group"
             href="{{ route('organigrama') }}">
            <span class="material-symbols-outlined text-green-sustainability text-3xl">account_tree</span>
            <div class="flex flex-col gap-1">
              <h2 class="text-text-light dark:text-text-dark text-lg font-bold uppercase group-hover:text-green-sustainability">
                Organigrama Municipal
              </h2>
              <p class="text-subtle-light dark:text-subtle-dark text-sm font-normal leading-normal">
                Entiende nuestra estructura jerárquica y funcional para una gestión eficiente.
              </p>
            </div>
          </a>

          {{-- Valores --}}
          <a class="flex flex-col gap-3 rounded-xl border border-border-light dark:border-border-dark bg-white dark:bg-background-dark/80 p-6 transition-all hover:shadow-lg hover:-translate-y-1 group"
             href="{{ route('valores') }}">
            <span class="material-symbols-outlined text-green-sustainability text-3xl">verified_user</span>
            <div class="flex flex-col gap-1">
              <h2 class="text-text-light dark:text-text-dark text-lg font-bold uppercase group-hover:text-green-sustainability">
                Nuestros Valores Institucionales
              </h2>
              <p class="text-subtle-light dark:text-subtle-dark text-sm font-normal leading-normal">
                Los principios éticos que rigen cada una de nuestras acciones.
              </p>
            </div>
          </a>

          {{-- Equipo de Gestión --}}
          <a class="flex flex-col gap-3 rounded-xl border border-border-light dark:border-border-dark bg-white dark:bg-background-dark/80 p-6 transition-all hover:shadow-lg hover:-translate-y-1 group"
             href="{{ route('equipo-gestion') }}">
            <span class="material-symbols-outlined text-green-sustainability text-3xl">groups</span>
            <div class="flex flex-col gap-1">
              <h2 class="text-text-light dark:text-text-dark text-lg font-bold uppercase group-hover:text-green-sustainability">
                Equipo de Gestión Municipal
              </h2>
              <p class="text-subtle-light dark:text-subtle-dark text-sm font-normal leading-normal">
                Conoce a los directivos que lideran las áreas de la municipalidad.
              </p>
            </div>
          </a>

        </div>
      </div>
    </main>

    {{-- FOOTER --}}
    <footer class="flex flex-col gap-6 px-5 py-10 text-center @container border-t border-border-light dark:border-border-dark mt-10">
      <div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-3 @[480px]:flex-row @[480px]:justify-around">
        <a class="text-subtle-light dark:text-subtle-dark text-base font-normal hover:text-secondary dark:hover:text-secondary min-w-40" href="#">
          Mapa del Sitio
        </a>
        <a class="text-subtle-light dark:text-subtle-dark text-base font-normal hover:text-secondary dark:hover:text-secondary min-w-40" href="#">
          Políticas de Privacidad
        </a>
        <a class="text-subtle-light dark:text-subtle-dark text-base font-normal hover:text-secondary dark:hover:text-secondary min-w-40" href="#">
          Términos de Servicio
        </a>
        <a class="text-subtle-light dark:text-subtle-dark text-base font-normal hover:text-secondary dark:hover:text-secondary min-w-40" href="#">
          Contacto
        </a>
      </div>
      <div class="flex flex-wrap justify-center gap-4">
        <a class="text-subtle-light dark:text-subtle-dark hover:text-secondary dark:hover:text-secondary transition-colors" href="#">
          <span class="material-symbols-outlined">alternate_email</span>
        </a>
        <a class="text-subtle-light dark:text-subtle-dark hover:text-secondary dark:hover:text-secondary transition-colors" href="#">
          <span class="material-symbols-outlined">phone</span>
        </a>
        <a class="text-subtle-light dark:text-subtle-dark hover:text-secondary dark:hover:text-secondary transition-colors" href="#">
          <span class="material-symbols-outlined">location_on</span>
        </a>
      </div>
      <p class="text-subtle-light dark:text-subtle-dark text-base font-normal leading-normal">
        © 2024 Municipalidad de Ate. Todos los derechos reservados.
      </p>
    </footer>

  </div>
</div>
</body>
</html>
