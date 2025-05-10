<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Authenticatable
{
    use HasFactory;
    protected $table = 'administradores';
    public $timestamps=false;


    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombres',
        'apellidos',
        'correo',
        'username',
        'contraseña',
        'imagen',
        'estado',
        'rol',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        //'contraseña',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'contraseña' => 'hashed',
    ];


    public function isNivel1(){

        return($this->rol=='nivel 1')?true:false;

    }

    public function isNivel2(){

        return($this->rol=='nivel 2')?true:false;
        
    }

    

}
