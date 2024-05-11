<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;
use App\Models\Reservations;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        if($request){
            $tables = DB::select('call GetFreeTables');

            return response()->json(['tables'=>$tables]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request)
    {
        if($request){
            $correo='navasvides@gmail.com';
            $datetime = $request->input('datetime');
            $tableID=$request->input('TableID');
            $date=substr($datetime,0,10);
            $hour=substr($datetime,11,16);
            $reservation = new Reservations;
            $reservation->num_persons=$request->input('cantidad_personas');
            $reservation->users_id=1;
            $reservation->establishments_id=1;
            $reservation->tables_id=$tableID;
            $reservation->Fecha=$date;
            $reservation->hora=$hour;
            $reservation->save();

            $updateTable = DB::update('UPDATE tables SET state=? WHERE id=?',['no disponible',$tableID]);
            return response()->json(['response'=>$reservation]);
        }  
        else{
            return response()->json(['response'=>'No hay response']);
        }      
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $results = DB::select('SELECT*FROM reservations WHERE state = ? AND users_id=?',['in progress','1']);
        return response()->json(['results'=>$results]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function cancelReservation($id,$id_table)
    {

        $tableUpdate = DB::update('UPDATE tables SET state=? WHERE id= ?',['disponible',$id_table]);

        $response = DB::update('UPDATE reservations SET state = ? WHERE id = ?',['canceled',$id]);

        if($response>0){
            return response()->json(['message'=>$response]);
        }else{
            return response()->json(['message'=>'No hay respuesta del servidor']);
        }
        



        
        return view('Vistas/Reservaciones/ReservacionesClientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
