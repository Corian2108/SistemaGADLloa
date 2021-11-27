<?php

namespace Database\Factories;

use App\Models\Tipo_material;
use Illuminate\Database\Eloquent\Factories\Factory;

class Tipo_materialFactory extends Factory
{

    protected $model = Tipo_material::class;

    public function definition()
    {
        return [
            'tipo' => $this->faker->unique()->randomElement(array(
                'Material de aseo',
                'Material de oficina',
                'Material de construccion',
                'Material de vestimenta'
            ))
        ];
    }
}
