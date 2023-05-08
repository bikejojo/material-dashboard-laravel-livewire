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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id('e');
            $table->String('codigo');
            $table->String('asunto');
            $table->date('FechaRegistro');
            $table->date('FechaInicio');
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->String('Ubicacion');
            $table->bigInteger('tipo');
            $table->unsignedBigInteger('pe');
            $table->unsignedBigInteger('id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
