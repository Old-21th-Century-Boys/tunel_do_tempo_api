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
        Schema::create('historias_paralelas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('path');
            $table->string('IdMembros');
            $table->string('fotoId');
            $table->string('videoId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historias_paralelas');
    }
};
