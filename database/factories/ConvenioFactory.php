<?php

namespace Database\Factories;

use App\Models\Banco;
use App\Models\Convenio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convenio>
 */
class ConvenioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Convenio::class;
    public function definition(): array
    {
        return [
            'convenio' => $this->faker->word(),
            'verba' => $this->faker->randomFloat(2, 1000, 100000),
            'banco_codigo' => Banco::factory(),
        ];
    }
}
