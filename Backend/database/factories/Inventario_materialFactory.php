<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Inventario_materialFactory extends Factory
{
    public function definition()
    {
        return [
            //llave foranea
            'id_tipo_materiales' => $this->faker->randomNumber(1, 4),
            //campos
            'detalle' => $this->faker->text(50),
            'costo_unitario' => $this->faker->randomFloat(2, 2, 10),
            'costo_total' => $this->faker->randomFloat(2, 20, 50),
            'nombre' => $this->faker->words(3),
            'cantidad' => $this->faker->randomNumber(),
            'borrado' => $this->faker->boolean()
        ];
    }
}
