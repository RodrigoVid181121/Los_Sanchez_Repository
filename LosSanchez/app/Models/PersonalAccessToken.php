<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalAccessToken extends Model
{
    use HasFactory;
    protected $table = 'personal_access_token';

    public $timestamps=false;

    protected $fillable=[
        'users_id',
        'state',
        'last_used_at',
        'expires_at',
        'created_at',
    ];
}
