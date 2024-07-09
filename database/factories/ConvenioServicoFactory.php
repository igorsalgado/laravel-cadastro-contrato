<?php

namespace Database\Factories;

use App\Models\Convenio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConvenioServico>
 */
class ConvenioServicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'convenio_codigo' => Convenio::factory(),
            'servico' => $this->faker->word(),
        ];
    }
}
