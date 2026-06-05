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
        Schema::create('detalle_resetas', function (Blueprint $table) {
            $table->id();
            $table->string('medicamento',45);
            $table->string('dosis',45);
            $table->string('frecuencia',45);
            $table->string('duracion',45);
            $table->foreignId('reseta_id')->constrained('resetas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_resetas');
    }
};
