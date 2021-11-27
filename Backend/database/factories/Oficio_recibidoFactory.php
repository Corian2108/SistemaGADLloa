<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Oficio_recibidoFactory extends Factory
{
    public function definition()
    {
        return [
            //llave foranea
            'id_estado_oficios' => $this->faker->randomNumber(1, 6),
            //campos
            'telefono' => $this->faker->phoneNumber(),
            'asunto' => $this->faker->text(100),
            'numero_tramite' => $this->faker->realTextBetween(10, 20),
            'redirigido' => $this->faker->name(),
            'fecha_respuesta' => $this->faker->dateTimeBetween('-2 weeks', '+0 days'),
            'aprobacion' => $this->faker->name(),
            'observacion' => $this->faker->text(150),
            'numero_oficio' => $this->faker->realTextBetween(10, 20),
            'fecha_ingreso' => $this->faker->dateTimeBetween('-1 months', '+0 days'),
            'hora_ingreso' => $this->faker->time(),
            'nombre_solicitante' => $this->faker->name(),
            'institucion' => $this->faker->words(3),
            'nombre_receptor' => $this->faker->name(),
            'e-mail' => $this->faker->safeEmail(),
            'borrado' => $this->faker->boolean(),
        ];
    }
}
