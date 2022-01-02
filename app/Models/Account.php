<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Account extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'id',
        'username',
        'password',
        'email',
        'phone',
        'address',
        'fullname',
        'isadmin',
        'avatar',
        'status',
    ];
}

