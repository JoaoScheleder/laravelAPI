<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    
    public function generateTelephone(){
        $telephone = $this->faker->numberBetween($min = 0,$max = 99) .' '. strval($this->faker->numberBetween($min = 10000,$max = 99999)). '-' . strval($this->faker->numberBetween($min = 1000,$max = 9999));
        return $telephone;
    }
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {   
    
        return [
            'nome'=> $this->faker->name(),
            'cpf'=> strval($this->faker->numberBetween($min = 10000000000, $max = 99999999999)),
            'telefone'=> json_encode(["telefone"=> $this->generateTelephone()]),
            'email' => $this->faker->unique()->word . '@gmail.com',
            'cep' => strval($this->faker->numberBetween($min = 10000000, $max = 99999999)),
            'endereço' => 'Rua ' . $this->faker->word,
            'numero' => strval($this->faker->numberBetween($min=1,$max=9999))

        ];
    }
}
