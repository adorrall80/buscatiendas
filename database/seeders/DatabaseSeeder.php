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

        User::factory()->create([
            'name' => 'Usuario Prueba',
            'email' => 'pruebas@pruebas.cl',
            'password' => bcrypt('1234'),
        ]); 


        $this->call(CategoriaSeeder::class);
        $this->call(TiendasSeeder::class);
    }
}
