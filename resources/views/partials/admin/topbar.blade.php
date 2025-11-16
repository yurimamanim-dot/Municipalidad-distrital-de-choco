<header class="h-16 bg-white border-b flex items-center justify-between px-4">
  <div class="flex items-center gap-3">
    <button class="md:hidden p-2 rounded hover:bg-gray-100" @click="open = !open">
      <span class="material-symbols-outlined">menu</span>
    </button>
    <h1 class="text-xl font-bold text-gray-800">@yield('header','Panel')</h1>
  </div>
  <div class="flex items-center gap-4">
    <span class="text-sm text-gray-500 hidden sm:block">{{ auth()->user()->email ?? '' }}</span>
    <span class="material-symbols-outlined text-gray-500">notifications</span>
  </div>
</header>
