<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficio_recibido extends Model
{
    use HasFactory;

    public function estado_oficios()
    {
        return $this->hasOne(Estado_oficio::class);
    }

    public function auditoria()
    {
        return $this->belongsTo(Auditoria::class);
    }
}
