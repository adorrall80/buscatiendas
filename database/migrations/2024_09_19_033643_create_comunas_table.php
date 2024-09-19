<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
     /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comunas', function (Blueprint $table) {
            $table->unsignedBigInteger('id'); // Campo id auto-incremental
            $table->string('nombre'); // Nombre de la comuna
            $table->unsignedBigInteger('id_region'); // Clave foránea a la tabla regiones
            $table->timestamps();

            // Definir la relación FK con la tabla regiones
          // $table->foreign('id_region')->references('id')->on('regiones')->onDelete('set null'); // Borra el valor de id_region si la región es eliminada
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunas');
    }
};
