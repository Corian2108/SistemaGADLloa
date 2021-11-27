<?php

namespace Database\Factories;

use App\Models\Tipo_fijo;
use Illuminate\Database\Eloquent\Factories\Factory;

class Tipo_fijoFactory extends Factory
{

    protected $model = Tipo_fijo::class;

    public function definition()
    {
        return [
            'tipo' => $this->faker->unique()->randomElement(array(
                'Mueble de oficina',
                'Equipo de oficina',
                'Equipo de computación',
                'Vehículos'
            ))
        ];
    }
}
