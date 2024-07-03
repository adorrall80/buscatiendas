<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TiendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        DB::table('tiendas')->insert([
            [
                'nombre' => 'Reciclaup',
                'slug' => Str::slug('Reciclaup'),
                'descripcion' => 'Tienda de ropa usada  de mujer, niño y bebé',
                'imagen' => '',
                'direccion' => 'José Domingo Cañas 1585',
                'telefono' => '56991304465',
                'email' => 'polahickmannc1@gmail.com',
                'latitud' => '40.712776',
                'longitud' => '-74.005974',
                'visible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Mandi Moda',
                'slug' => Str::slug('Mandi Moda'),
                'descripcion' => 'Hacemos circular y reciclamos, convirtiendo aquellas prendas que no se logran hacer circular.',
                'imagen' => '',
                'direccion' => 'Los Pinos 355',
                'telefono' => '945717403',
                'email' => 'abricenochavez@gmail.com',
                'latitud' => '40.712776',
                'longitud' => '-74.005974',
                'visible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Vestiale SpA',
                'slug' => Str::slug('Vestiale SpA'),
                'descripcion' => 'Recuperamos textiles en desuso para transformarlos en bolsos, carteras, mochilas y accesorios únicos, exclusivos y sustentables.',
                'imagen' => '',
                'direccion' => 'Mirador Hornopirén 1886',
                'telefono' => '+56976536418',
                'email' => 'vestiale.moda@gmail.com',
                'latitud' => '40.712776',
                'longitud' => '-74.005974',
                'visible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => ' Patio Frida By Monona Muller ',
                'slug' => Str::slug('Patio Frida By Monona Muller'),
                'descripcion' => 'Tienda sustentable amigable con el medio ambiente,  venta de vestuario intervenido , customizado  , segunda mano o nuevo , Arte enfocado al diseño y recursos sostenibles . Moda circular .',
                'imagen' => '',
                'direccion' => 'Dos esteros pasaje de la ladera 3 casa #7 ',
                'telefono' => '+56996436821',
                'email' => 'mononamuller@gmail.com',
                'latitud' => '40.712776',
                'longitud' => '-74.005974',
                'visible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'DUV dale una vuelta',
                'slug' => Str::slug('DUV dale una vuelta'),
                'descripcion' => 'Comercialización de prendas de segunda mano ',
                'imagen' => '',
                'direccion' => 'DAntonio Bellet 193 oficina 1210',
                'telefono' => '954087132',
                'email' => 'Carolina@duvdaleunavuelta.cl
',
                'latitud' => '40.712776',
                'longitud' => '-74.005974',
                'visible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Baúl Renueva',
                'slug' => Str::slug('Baúl Renueva'),
                'descripcion' => 'Venta de ropa de segunda mano.',
                'imagen' => '',
                'direccion' => ' Alcázar 4345',
                'telefono' => '+56992503453',
                'email' => 'Baulrenueva@gmail.com',
                'latitud' => '40.712776',
                'longitud' => '-74.005974',
                'visible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Polita',
                'slug' => Str::slug('Polita'),
                'descripcion' => 'Bastas ,zurcido ,confección de mantel para mesa ,carpeta',
                'imagen' => '',
                'direccion' => '',
                'telefono' => '56964154616',
                'email' => 'virnadiaz45@gmail.com ',
                'latitud' => '40.712776',
                'longitud' => '-74.005974',
                'visible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'El Ropero de Maluc',
                'slug' => Str::slug('El Ropero de Maluc'),
                'descripcion' => 'Vendo ropa europea categoría Premium, principalmente en forma física, pero también a través de instagram.',
                'imagen' => '',
                'direccion' => 'Km 17 Villarrica lican ray',
                'telefono' => '974976589 ',
                'email' => 'marianne.machuca78@gmail.com ',
                'latitud' => '40.712776',
                'longitud' => '-74.005974',
                'visible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Walkingcloset_moda',
                'slug' => Str::slug('Walkingcloset_moda'),
                'descripcion' => 'Venta de ropa de 2da mano en excelente estado. Recibimos tambien ropa previamente filtrada.',
                'imagen' => '',
                'direccion' => 'Goethe 2291',
                'telefono' => '+56998207473',
                'email' => 'Frosende@gmail.com,Walkingclosetmoda@gmail.com',
                'latitud' => '40.712776',
                'longitud' => '-74.005974',
                'visible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]

           
        ]);
    }
}
