<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Categorias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Categorias::create(['nome_categoria' => 'Desenvolvimento']);
        Categorias::create(['nome_categoria' => 'Negócios']);
        Categorias::create(['nome_categoria' => 'Finanças e contabilidade']);
        Categorias::create(['nome_categoria' => 'TI e software']);
        Categorias::create(['nome_categoria' => 'Produtividade no escritório']);
        Categorias::create(['nome_categoria' => 'Desenvolvimento pessoal']);
        Categorias::create(['nome_categoria' => 'Design']);
        Categorias::create(['nome_categoria' => 'Marketing']);
        Categorias::create(['nome_categoria' => 'Estilo de vida']);
        Categorias::create(['nome_categoria' => 'Fotografia e vídeo']);
        Categorias::create(['nome_categoria' => 'Saúde e fitness']);
        Categorias::create(['nome_categoria' => 'Música']);
        Categorias::create(['nome_categoria' => 'Ensino e estudo acadêmico']);



        // Categorias::factory(5)->create(); 
    }
}
