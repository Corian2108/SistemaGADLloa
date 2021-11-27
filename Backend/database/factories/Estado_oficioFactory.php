<?php

namespace Database\Factories;

use App\Models\Estado_oficio;
use Illuminate\Database\Eloquent\Factories\Factory;

class Estado_oficioFactory extends Factory
{

    protected $model = Estado_oficio::class;

    public function definition()
    {
        return [
            'estado' => $this->faker->unique()->randomElement(array(
                'recibido',
                'redirijido',
                'aprobado',
                'cancelado',
                'eliminado',
                'pendiente'
            ))
        ];
    }
}
