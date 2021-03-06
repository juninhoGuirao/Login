<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'Usuario', 'Senha',
    ];

    protected $hidden = [
        'Senha', 'remember_token',
    ];

}
