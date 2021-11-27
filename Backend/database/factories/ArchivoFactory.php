<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArchivoFactory extends Factory
{
    public function definition()
    {
        return [
            //llave foranea
            'id_auditoria' => $this->faker->randomNumber(1, 30),
            //campos
            'ruta' => $this->faker->text(50),
            'borrado' => $this->faker->boolean()
        ];
    }
}
