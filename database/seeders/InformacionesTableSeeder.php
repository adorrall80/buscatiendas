<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crea una instancia de Faker
        $faker = Faker::create();

        // Define los títulos personalizados
        $titulos = [
            'Quienes Somos',
            'Contacto',
            'Como-Registrarse',
            'precios'
            
        ];

        // Genera un array con registros de datos
        $informaciones = [];
        foreach ($titulos as $titulo) {
            $slug = $faker->slug;
            $informaciones[] = [
                'titulo' => $titulo,
                'descripcion' => $faker->paragraph,
                'imagen' => $faker->imageUrl,
                'slug' => $faker->slug,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Inserta los datos en la tabla 'informaciones'
        DB::table('informaciones')->insert($informaciones);
    }
}
