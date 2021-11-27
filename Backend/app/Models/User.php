<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->hasOne(rol::class);
    }

    public function estado_usuario()
    {
        return $this->hasOne(estado_usuario::class);
    }

    public function foto_usuario()
    {
        return $this->hasOne(Foto_usuario::class);
    }

    public function contrato()
    {
        return $this->hasOne(Contrato::class);
    }

    public function auditoria()
    {
        return $this->hasOne(Auditoria::class);
    }

}
