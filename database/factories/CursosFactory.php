<?php

namespace Database\Factories;

use App\Models\Categorias;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'nome_curso' => $this->faker->unique()->sentence(),
            'descricao_curso' => $this->faker->paragraph(),
            'preco' => $this->faker->randomNumber(2),
            'img_curso' => $this->faker->imageUrl(400,400),
            'id_categoria' => Categorias::pluck('id')->random(),
        ];
    }
}