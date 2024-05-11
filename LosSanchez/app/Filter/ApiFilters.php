<?php

namespace App\Filter;

use Illuminate\Http\Request;

class ApiFilters{
    protected $safeParams =[];
    protected $columnMaps =[];
    protected $operatorMaps =[];

    public function Transformation(Request $request){
        $queryL = [];

        foreach($this->safeParams as $param=>$operators){
            $query = $request->query($param);

            if(!isset($query)){
                continue;
            }

            $column = $this->columnMaps[$param] ?? $param;

            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $queryL[]=[$column,$this->operatorMaps[$operator],$query[$operator]];
                }
            }
        }

        return $queryL;
    }
}