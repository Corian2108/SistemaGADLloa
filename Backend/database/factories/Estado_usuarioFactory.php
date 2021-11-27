<?php

namespace Database\Factories;

use App\Models\Estado_usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class Estado_usuarioFactory extends Factory
{

    protected $model = Estado_usuario::class;

    public function definition()
    {
        return [
            'estado' => $this->faker->unique()->randomElement(array(
                'activo',
                'eliminado',
                'despedido',
                'vacaciones',
                'contrato finalizado'
            ))
        ];
    }
}
