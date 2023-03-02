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
        Schema::create('pinturas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('fecha_creacion');
            $table->unsignedBigInteger('artista_id');
            $table->foreign('artista_id')->references('id')->on('artistas')->onDelete('cascade');
            $table->double('precio');
            $table->string('tipo');
            $table->string('fotografia')->nullable()->default('nulo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinturas');
    }
};
