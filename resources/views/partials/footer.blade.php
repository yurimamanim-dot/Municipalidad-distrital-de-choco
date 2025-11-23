<footer class="w-full bg-primary text-white">
  <div class="mx-auto max-w-7xl px-4 py-10 md:px-10">
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
      
      {{-- COLUMNA 1 --}}
      <div class="col-span-1 lg:col-span-2">
        <div class="mb-4 flex items-center gap-4 text-white">
          <img alt="Logo Municipalidad" class="h-14 w-12" src="/img/logo-choco.png"/>
          <h2 class="text-xl font-bold leading-tight">MUNICIPALIDAD DISTRITAL DE CHOCO</h2>
        </div>
        <p class="text-sm text-gray-300 mb-6">
            Comprometidos con el desarrollo y bienestar de nuestra comunidad.
        </p>
        
        {{-- Redes Sociales Fijas --}}
        <div class="flex gap-4">
            <a href="https://facebook.com" target="_blank" class="hover:text-secondary hover:-translate-y-1 transition-transform">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
        </div>
      </div>

      {{-- COLUMNA 2 --}}
      <div>
        <h3 class="mb-4 text-lg font-bold">Enlaces Rápidos</h3>
        <ul class="space-y-2 text-sm text-gray-300">
          <li><a class="hover:text-secondary" href="{{ route('la-municipalidad') }}">La Municipalidad</a></li>
          <li><a class="hover:text-secondary" href="{{ route('mesa') }}">Mesa de Partes</a></li>
          <li><a class="hover:text-secondary" href="{{ route('noticias.index') }}">Noticias y Eventos</a></li>
        </ul>
      </div>

      {{-- COLUMNA 3 --}}
      <div>
        <h3 class="mb-4 text-lg font-bold">Contacto</h3>
        <ul class="space-y-3 text-sm text-gray-300">
          <li class="flex items-start gap-2">
            <span class="material-symbols-outlined mt-0.5 text-base text-secondary">location_on</span>
            <span>Plaza de Armas S/N, Choco, Castilla</span>
          </li>
          <li class="flex items-center gap-2">
            <span class="material-symbols-outlined text-base text-secondary">call</span>
            <span>(01) 123-4567</span>
          </li>
          <li class="flex items-center gap-2">
            <span class="material-symbols-outlined text-base text-secondary">mail</span>
            <span>contacto@munichoco.gob.pe</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="mt-8 border-t border-blue-800 pt-6 text-center text-sm text-gray-400">
      <p>© {{ date('Y') }} Municipalidad Distrital de Choco. Todos los derechos reservados.</p>
    </div>
  </div>
</footer>