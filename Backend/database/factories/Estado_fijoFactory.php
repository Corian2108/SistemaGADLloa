<?php

namespace Database\Factories;

use App\Models\Estado_fijo;
use Illuminate\Database\Eloquent\Factories\Factory;

class Estado_fijoFactory extends Factory
{

    protected $model = Estado_fijo::class;

    public function definition()
    {
        return [
            'estado' => $this->faker->unique()->randomElement(array(
                'disponible',
                'agotado',
                'eliminado'
            ))
        ];
    }
}
