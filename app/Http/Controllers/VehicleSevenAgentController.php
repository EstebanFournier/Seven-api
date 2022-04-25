<?php

namespace App\Http\Controllers;

use App\Models\Agencies;
use App\Models\Booking;
use App\Models\Vehicles;
use App\Models\WithdrawalTicket;
use Illuminate\Http\Request;

class VehicleSevenAgentController extends Controller
{
    public function allById(Agencies $agency)
    {
        $booking = Booking::with(['agencies', 'drivers', 'drivers.company'])
            ->where('agency_id', $agency->id)->get();

        return response()->json($booking, 200);
    }

    public function update(Request $request, $id)
    {
        $vehicle = Vehicles::find($id);
        $vehicle->update($request->all());
        return $vehicle;
    }

    public function createWithdrawalTicket(Request $request)
    {
        $request->validate([
            'vehicleModel' => 'required',
            'vehicleMatriculation' => 'required',
            'booking_id' => 'required',
            'mileage' => 'required',
            'dateHourControl' => 'required',
            /* 'aileAVG' => 'required',
            'aileARG' => 'required',
            'calandre' => 'required',
            'phareAVD' => 'required',
            'siegePass' => 'required',
            'porteAVG' => 'required',
            'aileAVD' => 'required',
            'aileARD' => 'required',
            'phareAVG' => 'required',
            'siegeCond' => 'required',
            'tdb' => 'required',
            'porteAVD' => 'required',
            'observation' => 'required', */
        ]);

        return WithdrawalTicket::create($request->all());
    }
}
