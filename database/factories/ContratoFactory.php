<?php

namespace Database\Factories;

use App\Models\Contrato;
use App\Models\ConvenioServico;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contrato>
 */
class ContratoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Contrato::class;
    public function definition(): array
    {
        return [
            'prazo' => $this->faker->numberBetween(1, 12),
            'valor' => $this->faker->randomFloat(2, 1000, 100000),
            'data_inclusao' => $this->faker->date(),
            'convenio_servico_codigo' => ConvenioServico::factory(),
        ];
    }
}
