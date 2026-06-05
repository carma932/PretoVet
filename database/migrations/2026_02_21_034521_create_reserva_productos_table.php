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
        Schema::create('reserva_productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->integer('cantidad');
            $table->date('fecha_reserva');
            $table->enum('tipo',['Entregado','Pendiente','Cancelado']);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('producto_id')->constrained('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva_productos');
    }
};
