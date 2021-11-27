<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memorandum extends Model
{
    use HasFactory;

    public function estado_oficio()
    {
        return $this->hasOne(Estado_oficio::class);
    }

    public function auditoria()
    {
        return $this->belongsTo(Auditoria::class);
    }
}
