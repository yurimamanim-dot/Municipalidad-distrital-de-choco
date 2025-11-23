<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Organigrama Municipal</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#003366", // Azul oscuro institucional
              "secondary": "#43A047", // Verde para sostenibilidad
              "background-light": "#FFFFFF",
              "background-dark": "#101010",
              "line-light": "#E3F2FD", // Celeste claro para líneas
              "text-light": "#212121",
              "text-dark": "#F5F5F5",
            },
            fontFamily: {
              "display": ["Public Sans", "sans-serif"]
            },
            borderRadius: {
              "DEFAULT": "0.25rem",
              "lg": "0.5rem",
              "xl": "0.75rem",
              "full": "9999px"
            },
          },
        },
      }
    </script>
<style>
        .org-chart ul {
            padding-top: 20px;
            position: relative;
            transition: all 0.5s;
        }
        .org-chart li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
            transition: all 0.5s;
        }
        .org-chart li::before, .org-chart li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 2px solid #E3F2FD;
            width: 50%;
            height: 20px;
        }
        .org-chart li::after {
            right: auto;
            left: 50%;
            border-left: 2px solid #E3F2FD;
        }
        .org-chart li:only-child::after, .org-chart li:only-child::before {
            display: none;
        }
        .org-chart li:only-child {
            padding-top: 0;
        }
        .org-chart li:first-child::before, .org-chart li:last-child::after {
            border: 0 none;
        }
        .org-chart li:last-child::before {
            border-right: 2px solid #E3F2FD;
            border-radius: 0 5px 0 0;
        }
        .org-chart li:first-child::after {
            border-radius: 5px 0 0 0;
        }
        .org-chart ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 2px solid #E3F2FD;
            width: 0;
            height: 20px;
        }
        .org-chart li > div {
            border-radius: 0.5rem;
            padding: 16px;
            display: inline-block;
            min-width: 180px;
            transition: all 0.5s;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-auto">
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-gray-200 dark:border-gray-800 px-4 md:px-10 py-3 shadow-sm bg-background-light dark:bg-background-dark sticky top-0 z-10">
<div class="flex items-center gap-4 text-primary dark:text-white">
<div class="size-6">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_6_319)">
<path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z" fill="currentColor"></path>
</g>
<defs><clippath id="clip0_6_319"><rect fill="white" height="48" width="48"></rect></clippath></defs>
</svg>
</div>
<h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Municipalidad</h2>
</div>
<div class="hidden md:flex flex-1 justify-end gap-8">
<div class="flex items-center gap-9">
<a class="text-sm font-medium leading-normal hover:text-primary dark:hover:text-secondary" href="#">Inicio</a>
<a class="text-sm font-medium leading-normal hover:text-primary dark:hover:text-secondary" href="#">Trámites</a>
<a class="text-sm font-medium leading-normal hover:text-primary dark:hover:text-secondary" href="#">Servicios</a>
<a class="text-sm font-medium leading-normal text-primary dark:text-secondary" href="#">Transparencia</a>
<a class="text-sm font-medium leading-normal hover:text-primary dark:hover:text-secondary" href="#">Contacto</a>
</div>
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary hover:bg-primary/90 text-white text-sm font-bold leading-normal tracking-[0.015em]">
<span class="truncate">Portal del Ciudadano</span>
</button>
</div>
</header>
<main class="flex-grow">
<div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
<div class="flex flex-wrap justify-between gap-3 p-4 mb-4">
<div class="flex w-full flex-col gap-3 text-center">
<h1 class="text-primary dark:text-gray-100 text-4xl font-black leading-tight tracking-[-0.033em]">Estructura Organizacional</h1>
<p class="text-gray-600 dark:text-gray-400 text-base font-normal leading-normal">Conoce la organización y jerarquía de nuestra municipalidad.</p>
</div>
</div>
<p class="text-text-light dark:text-text-dark text-base font-normal leading-normal pb-6 pt-1 px-4 text-center max-w-3xl mx-auto">
                A continuación se presenta el organigrama visual que ilustra las jerarquías principales de nuestra institución, desde el Alcalde hasta las diversas áreas y departamentos que sirven a nuestra comunidad.
            </p>
<div class="org-chart flex justify-center">
<ul>
<li>
<div class="bg-primary text-white shadow-lg hover:shadow-xl">
<h3 class="font-bold text-lg">Alcalde</h3>
<p class="text-sm">Juan Pérez</p>
</div>
<ul>
<li>
<div class="bg-primary text-white shadow-md hover:shadow-lg">
<h3 class="font-bold text-base">Gerencia Municipal</h3>
<p class="text-xs">Ana García</p>
</div>
<ul>
<li>
<div class="bg-secondary text-white shadow-md hover:shadow-lg">
<h3 class="font-bold text-base">Subgerencia de Obras</h3>
<p class="text-xs">Carlos Rodríguez</p>
</div>
</li>
<li>
<div class="bg-secondary text-white shadow-md hover:shadow-lg">
<h3 class="font-bold text-base">Subgerencia de Servicios</h3>
<p class="text-xs">Luisa Martínez</p>
</div>
</li>
</ul>
</li>
<li>
<div class="bg-primary text-white shadow-md hover:shadow-lg">
<h3 class="font-bold text-base">Gerencia de Administración</h3>
<p class="text-xs">Pedro Sánchez</p>
</div>
<ul>
<li>
<div class="bg-secondary text-white shadow-md hover:shadow-lg">
<h3 class="font-bold text-base">Área de Recursos Humanos</h3>
<p class="text-xs">María López</p>
</div>
</li>
<li>
<div class="bg-secondary text-white shadow-md hover:shadow-lg">
<h3 class="font-bold text-base">Área de Logística</h3>
<p class="text-xs">José Fernández</p>
</div>
</li>
<li>
<div class="bg-secondary text-white shadow-md hover:shadow-lg">
<h3 class="font-bold text-base">Área de Tesorería</h3>
<p class="text-xs">Sofia Gómez</p>
</div>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</div>
<div class="flex px-4 py-10 justify-center">
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-secondary hover:bg-secondary/90 text-white gap-2 pl-4 text-base font-bold leading-normal tracking-[0.015em] shadow-md hover:shadow-lg transition-shadow">
<span class="material-symbols-outlined text-white" data-icon="Download" data-size="24px" data-weight="regular">download</span>
<span class="truncate">Descargar Organigrama PDF</span>
</button>
</div>
</div>
</main>
</div>
</body></html>