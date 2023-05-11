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
        Schema::create('personals', function (Blueprint $table) {
            $table->id('p');
            $table->String('Codigo');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->date('FechaN');
            $table->bigInteger('Telefono');
            $table->bigInteger('Estado');
            $table->String('imagen')->nullable();
            $table->unsignedBigInteger('id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
