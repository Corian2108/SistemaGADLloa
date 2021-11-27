<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuditoriaFactory extends Factory
{
    public function definition()
    {
        return [
            //llaves foraneas
            'ci_usuario' => $this->faker->randomNumber(),
            'id_oficio_recibido' => $this->faker->randomNumber(1, 20),
            'id_oficio_enviado' => $this->faker->randomNumber(1, 20),
            'id_registro_llamada' => $this->faker->randomNumber(1, 20),
            'id_memorandum' => $this->faker->randomNumber(1, 20),
            'id_inventario_materiales' => $this->faker->randomNumber(1, 20),
            'id_inventario_activos' => $this->faker->randomNumber(1, 20),
            //campos
            'fecha_cambio' => $this->faker->dateTimeBetween('-2 months', '+0 days'),
            'hora_cambio' => $this->faker->time(),
            'codigo' => $this->faker->dateTimeBetween('-1 week', '+0 days'),
            'mac_address' => $this->faker->sha1(),
            'borrado' => $this->faker->boolean()
        ];
    }
}
