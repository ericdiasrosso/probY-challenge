<?php

namespace Database\Factories;

use App\Models\Projeto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjetoFactory extends Factory
{
    protected $model = Projeto::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->sentence(3),  // Alterado de 'name' para 'nome'
            'descricao' => $this->faker->paragraph(),
            'data_inicio' => $this->faker->date(),
            'status' => $this->faker->randomElement(['Pendente', 'Em Andamento', 'Concluído']),
            ];
    }
}
