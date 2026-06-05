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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('nombre',45);
            $table->string('especie',45);
            $table->string('raza',45);
            $table->string('sexo',10);
            $table->date('fecha_nacimiento');
            $table->string('color',30);
            $table->float('peso');
            $table->string('condiciones_especiales',100);
            $table->boolean('estado')->default(true);
            //lave foranea
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
