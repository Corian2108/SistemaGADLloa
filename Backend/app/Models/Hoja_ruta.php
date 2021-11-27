<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoja_ruta extends Model
{
    use HasFactory;

    public function oficios_recibidos()
    {
        return $this->hasOne(Oficio_recibido::class);
    }
}
