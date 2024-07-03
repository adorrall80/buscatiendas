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
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tienda');
            $table->string('slug')->unique();
            $table->text('descripcion')->nullable(); // Cambié a text y agregué nullable si es opcional
            $table->string('imagen')->nullable(); // Agregué nullable si es opcional
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->string('latitud');
            $table->string('longitud');
            $table->boolean('visible')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiendas');
    }
};
