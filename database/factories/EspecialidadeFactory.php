<?php

namespace Database\Factories;

use App\Models\Especialidade;
use Illuminate\Database\Eloquent\Factories\Factory;

class EspecialidadeFactory extends Factory
{
    protected $model = Especialidade::class;

    public function definition()
    {
        return [
            'especialidade'=> $this->faker->name()
        ];
    }
}
