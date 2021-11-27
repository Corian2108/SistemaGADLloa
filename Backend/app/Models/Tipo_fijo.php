<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_fijo extends Model
{
    use HasFactory;

    public function inventario_activos()
    {
        return $this->belongsTo(Inventario_activo::class);
    }
}
