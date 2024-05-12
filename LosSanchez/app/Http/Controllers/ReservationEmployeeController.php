<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationEmployeeController extends Controller
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
    public function store(Request $request)
    {
        $datetime = $request->input('datetime');
        $tableID=$request->input('TableID');
        $date=substr($datetime,0,10);
        $hour=substr($datetime,11,16);

        $reservation= new Reservations;
        $reservation->num_persons=$request->input('cantidad_personas');
        $reservation->users_id=1;
        $reservation->establishments_id=1;
        $reservation->tables_id=$tableID;
        $reservation->Fecha=$date;
        $reservation->hora=$hour;
        $reservation->save();

        $table=DB::update('UPDATE tables SET state=? WHERE id=?',['no disponible',$tableID]);

        return response()->json(['response'=>$reservation]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $results = DB::select('SELECT*FROM reservations WHERE state = ? AND users_id=?',['in progress','1']);
        return response()->json(['reservations'=>$results]);
    }

    protected function decrypt($encrypted, $iv){
        $key = 'LosSanchezFood@12089';
        $truncatedIV = substr($iv, 0, 16);
        //$step1 = base64_decode($encrypted);
        $decrypted = openssl_decrypt($encrypted, 'aes-256-cbc',$key,OPENSSL_RAW_DATA,$truncatedIV);

        return $decrypted;
    }

    public function searchReservation($phone){
        
        $results = DB::select('CALL SearchReserve(?)',[$phone]);

        return response()->json(['results'=>$results]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function cancelReservation($id, $id_table)
    {
        $results = DB::update('UPDATE reservations SET state=? WHERE id=?',['canceled',$id]);
        $tablesUpdate = DB::update('UPDATE tables SET state=? WHERE id=?',['disponible',$id_table]);
        
        return response()->json(['results'=>'exito al cancelar']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
