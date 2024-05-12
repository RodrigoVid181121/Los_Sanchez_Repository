<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;
    protected $table ='reservations';
    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable=[
        'num_persons',
        'state',
        'created_at',
        'updated_at',
        'users_id',
        'establishments_id',
        'tables_id',
        'Fecha',
        'hora'
    ];    

    protected $guarded=[

    ];
}
