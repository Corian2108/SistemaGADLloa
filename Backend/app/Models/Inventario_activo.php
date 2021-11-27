<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario_activo extends Model
{
    use HasFactory;

    public function tipo_fijo()
    {
        return $this->hasOne(Tipo_fijo::class);
    }

    public function estado_fijo()
    {
        return $this->hasOne(Estado_fijo::class);
    }

    public function auditoria()
    {
        return $this->belongsTo(Auditoria::class);
    }
}
