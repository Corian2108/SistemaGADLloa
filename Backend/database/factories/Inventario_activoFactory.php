<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Inventario_activoFactory extends Factory
{
    public function definition()
    {
        return [
            //llaves foraneas
            'id_tipo_fijo' => $this->faker->randomNumber(1, 4),
            'id_estado_fijo' => $this->faker->randomNumber(1, 3),
            //campos
            'detalle' => $this->faker->text(90),
            'activo' => $this->faker->words(3),
            'fijo' => $this->faker->boolean(),
            'numero_serie' => $this->faker->randomNumber(),
            'cantidad' => $this->faker->randomNumber(1, 10),
            'valor' => $this->faker->randomFloat(2, 20, 100),
            'borrado' => $this->faker->boolean()
        ];
    }
}
