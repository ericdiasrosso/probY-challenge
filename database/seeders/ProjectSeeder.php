<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Projeto;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Projeto::factory(10)->create();
    }
}
