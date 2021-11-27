<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registro_llamada extends Model
{
    use HasFactory;

    public function auditorias()
    {
        return $this->belongsTo(Auditoria::class);
    }

    public function auditoria()
    {
        return $this->hasOne(Auditoria::class);
    }
}
