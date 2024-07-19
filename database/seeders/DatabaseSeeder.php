<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       // todos os seeders que vão ser executados tem que vir aqui
        $this->call([
            CategoriasSeeder::class, 
            ProfessoresSeeder::class,
            // CursosSeeder::class, //cursos tem que ser o último pois tem as chaves estrangeiras do restante
        ]);
    }
}
