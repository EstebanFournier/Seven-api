<?php

namespace App\Http\Controllers;

use App\Models\RestituedCar;
use Illuminate\Http\Request;

class RestituedCarController extends Controller
{
    public function allRestituedCar(){
        return RestituedCar::all();
    }

    public function delete(Request $request){
        $restituedCar = RestituedCar::find($request->id);
        $restituedCar->delete();
        return response()->json($restituedCar, 200);
    }
}
