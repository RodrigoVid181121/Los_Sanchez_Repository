<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use HasFactory;
    
    protected $table='password_resets';

    protected $timestamps=false;

    protected $filllabel=[
        'email',
        'token',
        'created_at',
        'users_id'
    ];

    protected $guarded=[

    ];

}
