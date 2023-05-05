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
        //
        Schema::table('personals', function (Blueprint $table) {
            $table->foreign('p')->references('id')->on('users');
        });
        Schema::table('eventos', function (Blueprint $table) {
            $table->foreign('pe')->references('p')->on('personals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
