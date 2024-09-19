<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;




class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
            // Define los datos de las regiones con IDs específicos
            $regiones = [
                ['id' => 15, 'nombre' => 'Arica y Parinacota', 'created_at' => now()],
                ['id' => 1, 'nombre' => 'Tarapacá', 'created_at' => now()],
                ['id' => 2, 'nombre' => 'Antofagasta', 'created_at' => now()],
                ['id' => 3, 'nombre' => 'Atacama', 'created_at' => now()],
                ['id' => 4, 'nombre' => 'Coquimbo', 'created_at' => now()],
                ['id' => 5, 'nombre' => 'Valparaíso', 'created_at' => now()],
                ['id' => 13, 'nombre' => 'Metropolitana de Santiago', 'created_at' => now()],
                ['id' => 6, 'nombre' => 'O’Higgins', 'created_at' => now()],
                ['id' => 7, 'nombre' => 'Maule', 'created_at' => now()],
                ['id' => 16, 'nombre' => 'Ñuble', 'created_at' => now()],
                ['id' => 8, 'nombre' => 'Biobío', 'created_at' => now()],
                ['id' => 9, 'nombre' => 'La Araucanía', 'created_at' => now()],
                ['id' => 14, 'nombre' => 'Los Ríos', 'created_at' => now()],
                ['id' => 10, 'nombre' => 'Los Lagos', 'created_at' => now()],
                ['id' => 11, 'nombre' => 'Aysén del General Carlos Ibáñez del Campo', 'created_at' => now()],
                ['id' => 12, 'nombre' => 'Magallanes y de la Antártica Chilena', 'created_at' => now()],
            ];
    
            // Inserta los datos en la tabla regiones
            DB::table('regiones')->insert($regiones);
     }
}
