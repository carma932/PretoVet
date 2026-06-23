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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_pago')->unique();
            $table->decimal('monto');
            $table->enum('estado', ['Pendiente', 'Pagado', 'Anulado']);
            $table->foreignId('reserva_producto_id')->constrained('reserva_productos');
            $table->foreignId('tipo__pago_id')->constrained('tipo__pagos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};