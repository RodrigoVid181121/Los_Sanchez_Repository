<?php

namespace App\Filter;

use Illuminate\Http\Request;
use App\Filter\ApiFilters;

class ReservationsFilter extends ApiFilters{
    protected $safeParams =[
        'email'=>['eq'],
        'date'=>['eq']
    ];
    protected $columnMaps =[];
    protected $operatorMaps =[
        'eq'=>'='
    ];
}