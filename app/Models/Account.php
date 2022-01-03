<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
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

