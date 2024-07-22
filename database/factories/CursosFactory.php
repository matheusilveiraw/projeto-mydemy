<?php

namespace Database\Factories;

use App\Models\Categorias;
use App\Models\Professores;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cursos>
 */
class CursosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $nome_curso = $this->faker->unique()->sentence();
        return [
            'nome_curso' => $nome_curso,
            'descricao_curso' => $this->faker->paragraph(),
            'preco' => $this->faker->randomNumber(2),
            'img_curso' => $this->faker->imageUrl(400,400),
            'id_categoria' => Categorias::pluck('id')->random(),
            'id_professor' => Professores::pluck('id')->random(),
            'slug' => Str::slug($nome_curso)
        ];
    }
}