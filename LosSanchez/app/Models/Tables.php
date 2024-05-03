<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    use HasFactory;
    protected $table='tables';
    protected $primaryKey='id';

    protected $timestamps=false;
    protected $filllable=[
        'table_number',
        'seats',
        'state',
        'created_at',
        'updated_at'
    ];
}
