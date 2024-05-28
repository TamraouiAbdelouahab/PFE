<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'client';

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'phone_number',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
