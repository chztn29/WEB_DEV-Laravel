<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginStudent extends Model
{
    use HasFactory;

    protected $table = 'logins';

    protected $fillable = [
        'email',
        'password',
    ];
}
