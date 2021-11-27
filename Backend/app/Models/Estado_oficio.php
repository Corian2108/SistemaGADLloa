<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_oficio extends Model
{
    use HasFactory;

    public function oficios_enviados()
    {
        return $this->belongsTo(Oficio_enviado::class);
    }
    public function oficios_recibidos()
    {
        return $this->belongsTo(Oficio_recibido::class);
    }
    public function memorandums()
    {
        return $this->belongsTo(Memorandum::class);
    }
}
