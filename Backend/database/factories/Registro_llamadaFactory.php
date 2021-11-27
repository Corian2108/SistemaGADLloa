<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Registro_llamadaFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre_llamada' => $this->faker->name(),
            'nombre_dirijido' => $this->faker->name(),
            'fecha_llamada' => $this->faker->dateTimeBetween('-1 month', '+0 days'),
            'hora_llamada' => $this->faker->time(),
            'numero' => $this->faker->phoneNumber(),
            'asunto' => $this->faker->text(100),
            'borrado' => $this->faker->boolean()
        ];
    }
}
