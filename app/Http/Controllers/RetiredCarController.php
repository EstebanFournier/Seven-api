<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use App\Models\WithdrawalTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RetiredCarController extends Controller
{
    public function allRetiredCar(){
        $retiredCar = WithdrawalTicket::all();
        $response=null;

        foreach($retiredCar as $car){
            $vehicle = Vehicles::where('immatriculation',$car->vehicleMatriculation)->get();
            $car['vehicle']=$vehicle[0]['status'];
            $response[]=$car;
        }
        return response($response, 200);
    }
    public function delete(Request $request){
        $retiredCar = Vehicles::find($request->id);
        $retiredCar->delete();
        return response()->json($retiredCar, 200);
    }

    public function retiredCarFormById(Request $request){
        return WithdrawalTicket::find($request->id);
    }

    public function update(Request $request, $id){
        $retiredCar = WithdrawalTicket::find($id);
        $retiredCar->vehicleModel = $request->model;
        $retiredCar->vehicleMatriculation = $request->licensePlate;
        $retiredCar->save();

        $vehicle = Vehicles::find($request->vehicleId);
        $vehicle->status = $request->statusVehicle;
        $vehicle->save();

        return [$retiredCar, $vehicle];
    }
}
