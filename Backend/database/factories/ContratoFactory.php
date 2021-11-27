<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContratoFactory extends Factory
{
    public function definition()
    {
        return [
            //llave foranea
            'id_usuario' => $this->faker->randomNumber(1, 10),
            //campo
            'inicio' => $this->faker->dateTimeBetween('-2 years', '+0 days'),
            'fin' => $this->faker->dateTimeBetween('+0 days', '+3 years'),
            'horas_diarias' => 8,
            'horas_mensuales' => 40,
            'borrado' => false
        ];
    }
}
