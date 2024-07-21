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
        Schema::create('membros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamp('aniversario');
            $table->string('email')->unique();
            $table->string('fotoId')->nullable();
            $table->timestamps(); // This automatically adds created_at and updated_at as timestamp fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membros');
    }
};
