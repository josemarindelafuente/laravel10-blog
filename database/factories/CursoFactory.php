<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name_curso = fake()->sentence();

        return [
            //
            'id_categoria' => $this->faker->randomElement([1, 2]),
            'name_curso' => $name_curso,
            'slug' => Str::slug($name_curso, '-'),
            'description_curso' => fake()->paragraph(),
            'categoria' => $this->faker->randomElement(['Desarrollo Web', 'Diseño Web']),
        ];
    }
}
