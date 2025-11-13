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
    Schema::create('tramites', function (Blueprint $table) {
        $table->id();
        // Remitente
        $table->string('nombre', 120);
        $table->string('documento', 20);
        $table->string('correo', 120);
        $table->string('telefono', 30)->nullable();

        // Documento
        $table->enum('tipo', ['solicitud','reclamo','oficio','carta','otro'])->index();
        $table->string('asunto', 200);
        $table->text('descripcion')->nullable();

        // Gestión interna (no se expone públicamente)
        $table->string('expediente', 20)->unique(); // p.ej. EXP-2025-000123
        $table->enum('estado', ['recibido','derivado','observado','atendido'])->default('recibido')->index();
        $table->string('canal')->default('web');
        $table->timestamp('fecha_recepcion')->useCurrent();

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tramites');
    }
};
