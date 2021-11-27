<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Foto_usuarioFactory extends Factory
{
    public function definition()
    {
        return [
            //llave foranea
            'id_usuario' => $this->faker->randomNumber(10, true),
            //campos
            'ruta' => $this->faker->text(80),
        ];
    }
}
