<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


use Faker\Factory as Faker;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Ejemplo de categorías predefinidas
        $categorias = [
            'reparadora de ropa' ,
            'reparadora de calzado' ,
            'tienda de ropa de segunda mano',
            'upcycling',
            'tienda de intercambio de ropa',
            'tienda de arriendo de ropa',
            'tienda que recibe donaciones de ropa',
        ];

        // Iterar sobre cada categoría y insertar en la base de datos
        foreach ($categorias as $categoria) {
            $slug = Str::slug($categoria); // Crear el slug  
            DB::table('categorias')->insert([
                'nombre' => $categoria,
                'descripcion' => $faker->sentence,
                'slug' => $slug, // Insertar el slug en la tabla
                          
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
