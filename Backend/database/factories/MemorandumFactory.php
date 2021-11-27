<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemorandumFactory extends Factory
{
    public function definition()
    {
        return [
            //llave foranea
            'id_estado_oficio' => $this->faker->randomNumber(1, 6),
            //campos
            'fecha_elaboracion' => $this->faker->dateTimeBetween('-2 weeks', '+0 days'),
            'dirijido' => $this->faker->name(),
            'asunto' => $this->faker->text(150),
            'borrado' => $this->faker->boolean()
        ];
    }
}
