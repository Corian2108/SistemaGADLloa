<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario_material extends Model
{
    use HasFactory;

    public function tipo_materiale()
    {
        return $this->hasOne(Tipo_material::class);
    }

    public function auditoria()
    {
        return $this->belongsTo(Auditoria::class);
    }
}
