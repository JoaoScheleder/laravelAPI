<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=> $this->faker->name(),
            'especialidade_id'=> random_int(1,5),
            'crm'=> strval(random_int(0,999999))

        ];
    }
}
