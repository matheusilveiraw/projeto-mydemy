<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorias>
 */
class CategoriasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_categoria' => $this->faker->unique()->sentence(),
            'descricao_categoria' => $this->faker->paragraph(),
            'sub_titulo_categoria' => $this->faker->unique()->sentence(),
            'img_categoria' => $this->faker->imageUrl(400,400),
        ];
    }

    public function withName($name)
    {
        return $this->state(function (array $attributes) use ($name) {
            return [
                'nome_categoria' => $name,
            ];
        });
    }
}
