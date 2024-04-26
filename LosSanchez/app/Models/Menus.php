<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $primaryKey='id';

    protected $timestamps=false;

    protected $filllabel=[
        'name',
        'image',
        'updated_at',
        'created_at'
    ];

    protected $guarded =[

    ];
}
