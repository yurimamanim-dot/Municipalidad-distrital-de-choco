<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Nuestra Misión - Municipalidad</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#003366",
              "accent": "#43A047",
              "background-light": "#f5f7f8",
              "background-dark": "#0f1923",
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
<body class="bg-background-light dark:bg-background-dark font-display text-[#333333] dark:text-gray-200">
<div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<div class="flex flex-1 justify-center py-5">
<div class="layout-content-container flex flex-col w-full max-w-5xl px-4 flex-1 gap-8">
<!-- TopNavBar Component -->
<header class="flex items-center justify-between whitespace-nowrap bg-white dark:bg-gray-800/50 px-6 sm:px-10 py-3 rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm">
<div class="flex items-center gap-4 text-primary dark:text-white">
<div class="size-6 text-primary dark:text-white">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_6_535)">
<path clip-rule="evenodd" d="M47.2426 24L24 47.2426L0.757355 24L24 0.757355L47.2426 24ZM12.2426 21H35.7574L24 9.24264L12.2426 21Z" fill="currentColor" fill-rule="evenodd"></path>
</g>
<defs>
<clippath id="clip0_6_535"><rect fill="white" height="48" width="48"></rect></clippath>
</defs>
</svg>
</div>
<h2 class="text-lg font-bold tracking-[-0.015em]">Logo Municipal</h2>
</div>
<div class="hidden md:flex flex-1 justify-end gap-8">
<div class="flex items-center gap-9">
<a class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-accent" href="#">Inicio</a>
<a class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-accent" href="#">Trámites</a>
<a class="text-sm font-bold text-primary dark:text-accent" href="#">Nuestra Misión</a>
<a class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-accent" href="#">Contacto</a>
</div>
</div>
</header>
<main class="flex flex-col gap-12 sm:gap-16">
<!-- PageHeading and Image Section -->
<section class="grid md:grid-cols-2 gap-8 md:gap-12 items-center px-4 sm:px-6 py-8">
<div class="flex flex-col gap-4">
<h1 class="text-primary dark:text-white text-5xl sm:text-6xl font-black leading-tight tracking-tighter">Nuestra Misión</h1>
<p class="text-gray-600 dark:text-gray-300 text-lg sm:text-xl font-normal leading-relaxed">
                                    Contribuir al bienestar de los vecinos a través de una gestión transparente, eficiente y sostenible.
                                </p>
</div>
<div class="flex w-full grow bg-transparent @container">
<div class="w-full overflow-hidden bg-transparent aspect-[4/3] flex rounded-xl shadow-lg">
<div class="w-full bg-center bg-no-repeat bg-cover aspect-auto flex-1" data-alt="Un trabajador municipal ayudando a un ciudadano en una oficina luminosa y moderna." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBxxYskaJMQ9Y5yMVE8mzxdTPnHHxlKDCiqjVdFUrtTxXw54H9BRdrkwXAs9huXgGyd2z1PMIH3zr2twG4OGvf89EWbIKJffvdSx5Oo8EiWCDX-11ynMuDDjH-OucseJ3HL3l6xZFZfQnCAjMXOPAmqnHuLy2SEw6a2ekwS-tY5fVUAoak39nNgfZkBVvB3uAJa_r1j48knyXZ5npnYiJU_7WN_j1dHjbKhtuffncPW04_2-14GrM3WQdEI5RP56UGOm6isTrDOYlxs");'></div>
</div>
</div>
</section>
<!-- TextGrid (Values Section) -->
<section class="px-4 sm:px-6">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
<div class="flex flex-1 gap-4 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark p-6 flex-col text-center items-center shadow-sm hover:shadow-lg transition-shadow duration-300">
<div class="text-accent text-5xl">
<span class="material-symbols-outlined !text-5xl">manage_search</span>
</div>
<div class="flex flex-col gap-1">
<h2 class="text-primary dark:text-white text-xl font-bold leading-tight">Transparencia</h2>
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">Gestión clara y accesible para todos los vecinos.</p>
</div>
</div>
<div class="flex flex-1 gap-4 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark p-6 flex-col text-center items-center shadow-sm hover:shadow-lg transition-shadow duration-300">
<div class="text-accent text-5xl">
<span class="material-symbols-outlined !text-5xl">groups</span>
</div>
<div class="flex flex-col gap-1">
<h2 class="text-primary dark:text-white text-xl font-bold leading-tight">Compromiso</h2>
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">Dedicados al servicio y bienestar de nuestra comunidad.</p>
</div>
</div>
<div class="flex flex-1 gap-4 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark p-6 flex-col text-center items-center shadow-sm hover:shadow-lg transition-shadow duration-300">
<div class="text-accent text-5xl">
<span class="material-symbols-outlined !text-5xl">potted_plant</span>
</div>
<div class="flex flex-col gap-1">
<h2 class="text-primary dark:text-white text-xl font-bold leading-tight">Desarrollo Local</h2>
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">Impulsando el crecimiento sostenible y la calidad de vida.</p>
</div>
</div>
</div>
</section>
<!-- Footer Placeholder -->
<footer class="mt-16 py-8 border-t border-gray-200 dark:border-gray-700 text-center">
<p class="text-sm text-gray-500 dark:text-gray-400">© 2024 Municipalidad. Todos los derechos reservados.</p>
</footer>
</main>
</div>
</div>
</div>
</div>
</body></html>