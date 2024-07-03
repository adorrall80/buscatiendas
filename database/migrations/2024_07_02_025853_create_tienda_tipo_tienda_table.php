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
        Schema::create('tienda_tipo_tienda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tienda_id');
            $table->unsignedBigInteger('tipo_tienda_id');
            $table->foreign('tienda_id')->references('id')->on('tiendas');
            $table->foreign('tipo_tienda_id')->references('id')->on('tipo_tiendas');
            $table->boolean('visible')->default(true);
            $table->unique(['tienda_id', 'tipo_tienda_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tienda_tipo_tienda');
    }
};
