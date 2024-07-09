<?php

namespace Database\Seeders;

use App\Models\Banco;
use App\Models\Contrato;
use App\Models\Convenio;
use App\Models\ConvenioServico;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Banco::factory()->count(10)->create();
        Convenio::factory()->count(10)->create();
        ConvenioServico::factory()->count(10)->create();
        Contrato::factory()->count(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
