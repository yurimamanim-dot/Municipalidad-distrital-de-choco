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
    Schema::create('adjuntos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('tramite_id')->constrained()->cascadeOnDelete();
        $table->string('nombre_original');
        $table->string('mime', 100)->nullable();
        $table->unsignedBigInteger('size')->default(0);
        $table->string('path'); // storage/app/public/tramites/{expediente}/archivo.pdf
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adjuntos');
    }
};
