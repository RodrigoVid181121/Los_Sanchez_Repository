<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalAccessToken extends Model
{
    use HasFactory;
    protected $table = 'personal_access_token';
    protected $primaryKey='id';

    protected $timestamps=false;

    protected $filllable=[
        'state',
        'last_used_at',
        'expires_at',
        'created_at',
        'users_id'
    ];

    protected $guarded=[
        
    ];
}
