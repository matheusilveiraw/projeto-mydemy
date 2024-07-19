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
        $nomesCategorias = [
            'Desenvolvimento',
            'Negócios',
            'Finanças e contabilidade',
            'TI e software',
            'Produtividade no escritório',
            'Desenvolvimento pessoal',
            'Design',
            'Marketing',
            'Estilo de vida',
            'Fotografia e vídeo',
            'Saúde e fitness',
            'Música',
            'Ensino e estudo acadêmico'
        ];

        foreach ($nomesCategorias as $nome) {
            Categorias::factory()->withName($nome)->create();
        }
    }
}