<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profesor extends Model
{
    //
    use Notifiable;

        protected $guard = 'profesor';

        protected $fillable = [
            'name', 'email', 'tipo', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
