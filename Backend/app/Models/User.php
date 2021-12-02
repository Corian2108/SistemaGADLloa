<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
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

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
