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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('habitaciones_id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('cliente_nombre');
            $table->string('cliente_email');
            $table->timestamps();

            $table->foreign('habitaciones_id')->references('id')->on('habitaciones')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
