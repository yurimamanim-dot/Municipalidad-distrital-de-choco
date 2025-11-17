<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('slug')->unique();
            $table->string('bajada')->nullable();
            $table->text('contenido');
            $table->string('imagen_portada')->nullable();
            $table->string('categoria')->nullable(); // Eventos, Obras, Salud, etc.
            $table->timestamp('publicado_en')->nullable();
            $table->boolean('es_destacada')->default(false);
            $table->boolean('publicado')->default(false); // 👈 NUEVO
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
