<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Hoja_rutaFactory extends Factory
{
    public function definition()
    {
        return [
            //llave foranea
            'id_oficio_recibido' => $this->faker->randomNumber(1, 6),
            //campos
            'combustible' => $this->faker->randomFloat(2, 2, 10),
            'observacion' => $this->faker->text(150),
            'fecha_salida' => $this->faker->dateTimeBetween('-2 days', '+0 days'),
            'fecha_ingreso' => $this->faker->dateTimeBetween('+ days', '+2 days'),
            'solicitante' => $this->faker->name(),
            'lugar' => $this->faker->words(3),
            'actividad' => $this->faker->text(100),
            'cantidad' => $this->faker->randomNumber(),
            'hora' => $this->faker->time(),
            'fecha_solicitud' => $this->faker->dateTimeBetween('-1 week', '+0 days'),
            'borrado' => $this->faker->boolean()
        ];
    }
}
