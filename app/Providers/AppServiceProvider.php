<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Configuration;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Esto comparte la variable $config con TODAS las vistas (header, footer, etc.)
        // Usamos un 'closure' (*) para que no de error si la tabla aun no existe al migrar
        try {
            View::share('config', Configuration::first() ?? new Configuration());
        } catch (\Exception $e) {
            // Ignorar si la base de datos no está lista aún
        }
    }
}
