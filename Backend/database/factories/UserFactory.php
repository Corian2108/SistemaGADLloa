<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            //llaves foraneas
            'id_rol' => $this->faker->numberBetween(1, 5),
            'id_estado_usuario' => $this->faker->numberBetween(1, 5),
            //campos
            'ci' => $this->faker->randomNumber(),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => 'passwordGenerica1', // password
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
