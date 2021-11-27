<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_material extends Model
{
    use HasFactory;

    public function inventario_materiale()
    {
        return $this->belongsTo(Inventario_material::class);
    }
}
