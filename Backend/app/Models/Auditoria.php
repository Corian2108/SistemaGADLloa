<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->hasOne(User::class);
    }

    public function oficio_recibido()
    {
        return $this->hasOne(Oficio_recibido::class);
    }

    public function oficio_enviado()
    {
        return $this->hasOne(Oficio_enviado::class);
    }

    public function registro_llamada()
    {
        return $this->hasOne(Registro_llamada::class);
    }

    public function memorandum()
    {
        return $this->hasOne(Memorandum::class);
    }

    public function inventario_material()
    {
        return $this->hasOne(Inventario_material::class);
    }

    public function inventario_activo()
    {
        return $this->hasOne(Inventario_activo::class);
    }

    public function archivo()
    {
        return $this->belongsTo(Archivo::class);
    }
}
