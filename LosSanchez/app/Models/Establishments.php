<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishments extends Model
{
    use HasFactory;

    protected $table='establishments';

    protected $primaryKey='id';

    protected $timestamps=false;

    protected $filllabel=[
        'name',
        'location',
        'email',
        'phone',
        'menus_id'
    ];

    protected $guarded=[

    ];
}
