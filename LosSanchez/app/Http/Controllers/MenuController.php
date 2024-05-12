<?php

namespace App\Http\Controllers;

use App\Models\Menus;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function GetMenu()
    {
        //
        $tables = Menus::all();

        return response()->json(['menu'=>$tables]);
    }
}
