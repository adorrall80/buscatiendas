<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        


        $this->call(CategoriaSeeder::class);
        $this->call(TiendasSeeder::class);
        $this->call(InformacionesTableSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(ComunaSeeder::class);
        User::factory()->create([
            'rut' => '123456789',
            'name' => 'Usuario Prueba',
            'last_name' => 'Pruebas las name',
            'phone' => '123456789',
            'email' => 'pruebas@pruebas.cl',
            'id_region' => 13,
            'id_comuna' => 13101,
            'address' => 'Calle Falsa 123',
            'password' => bcrypt('1234'),
         
            
        ]);
    }
}
