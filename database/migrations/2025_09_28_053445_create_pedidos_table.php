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
         Schema::create('pedidos', function (Blueprint $table) {
        $table->id('id_pedido');
        $table->unsignedBigInteger('id_guia')->nullable();
        $table->string('tipo_pedido')->nullable();
        $table->text('descripcion_pedido')->nullable();
        $table->text('instrucciones_especiales')->nullable();
        $table->date('fecha_programada')->nullable();
        $table->float('peso_kg')->nullable();
        $table->string('estado_pedido')->nullable();
        // Si decides usar timestamps en el futuro:
        // $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
