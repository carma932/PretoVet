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
        Schema::create('historial_medico_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->text('diagnostico');
            $table->text('tratamiento');
            $table->text('observaciones')->nullable();
            $table->date('fecha_registro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_medico_m_s');
    }
};
