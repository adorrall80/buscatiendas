<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;




class ComunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comunas = [
            // Región de Arica y Parinacota (ID: 15)
            ['id' => 1, 'nombre' => 'Arica', 'id_region' => 15],
            ['id' => 2, 'nombre' => 'Camarones', 'id_region' => 15],

            // Región de Tarapacá (ID: 1)
            ['id' => 3, 'nombre' => 'Iquique', 'id_region' => 1],
            ['id' => 4, 'nombre' => 'Alto Hospicio', 'id_region' => 1],

            // Región de Antofagasta (ID: 2)
            ['id' => 5, 'nombre' => 'Antofagasta', 'id_region' => 2],
            ['id' => 6, 'nombre' => 'Mejillones', 'id_region' => 2],

            // Región de Atacama (ID: 3)
            ['id' => 7, 'nombre' => 'Copiapó', 'id_region' => 3],
            ['id' => 8, 'nombre' => 'Caldera', 'id_region' => 3],

            // Región de Coquimbo (ID: 4)
            ['id' => 9, 'nombre' => 'La Serena', 'id_region' => 4],
            ['id' => 10, 'nombre' => 'Coquimbo', 'id_region' => 4],

            // Región de Valparaíso (ID: 5)
            ['id' => 11, 'nombre' => 'Valparaíso', 'id_region' => 5],
            ['id' => 12, 'nombre' => 'Viña del Mar', 'id_region' => 5],

            // Región Metropolitana de Santiago (ID: 13)
            ['id' => 13, 'nombre' => 'Santiago', 'id_region' => 13],
            ['id' => 14, 'nombre' => 'Puente Alto', 'id_region' => 13],

            // Región de O’Higgins (ID: 6)
            ['id' => 15, 'nombre' => 'Rancagua', 'id_region' => 6],
            ['id' => 16, 'nombre' => 'San Fernando', 'id_region' => 6],

            // Región del Maule (ID: 7)
            ['id' => 17, 'nombre' => 'Talca', 'id_region' => 7],
            ['id' => 18, 'nombre' => 'Curicó', 'id_region' => 7],

            // Región de Ñuble (ID: 16)
            ['id' => 19, 'nombre' => 'Chillán', 'id_region' => 16],
            ['id' => 20, 'nombre' => 'Bulnes', 'id_region' => 16],

            // Región del Biobío (ID: 8)
            ['id' => 21, 'nombre' => 'Concepción', 'id_region' => 8],
            ['id' => 22, 'nombre' => 'Talcahuano', 'id_region' => 8],

            // Región de La Araucanía (ID: 9)
            ['id' => 23, 'nombre' => 'Temuco', 'id_region' => 9],
            ['id' => 24, 'nombre' => 'Villarrica', 'id_region' => 9],

            // Región de Los Ríos (ID: 14)
            ['id' => 25, 'nombre' => 'Valdivia', 'id_region' => 14],
            ['id' => 26, 'nombre' => 'Panguipulli', 'id_region' => 14],

            // Región de Los Lagos (ID: 10)
            ['id' => 27, 'nombre' => 'Puerto Montt', 'id_region' => 10],
            ['id' => 28, 'nombre' => 'Castro', 'id_region' => 10],

            // Región de Aysén (ID: 11)
            ['id' => 29, 'nombre' => 'Coyhaique', 'id_region' => 11],
            ['id' => 30, 'nombre' => 'Puerto Aysén', 'id_region' => 11],

            // Región de Magallanes (ID: 12)
            ['id' => 31, 'nombre' => 'Punta Arenas', 'id_region' => 12],
            ['id' => 32, 'nombre' => 'Puerto Natales', 'id_region' => 12],
        ];

        DB::table('comunas')->insert($comunas);
    }    
}
