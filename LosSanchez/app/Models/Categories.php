<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $filllabel = [
        'name',
        'updated_at',
        'created_at',
        'menus_id'
    ];

    protected $guarded = [

    ];
}
