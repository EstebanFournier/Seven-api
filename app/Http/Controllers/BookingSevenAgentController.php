<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Agencies;
use App\Models\Drivers;
use App\Models\PlaceEnd;
use App\Models\PlaceStart;
use App\Models\Vehicles;
use Illuminate\Http\Request;

class BookingSevenAgentController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();

        $response=null;

        foreach ($bookings as $booking){
            $driver = Drivers::find($booking['driver_id']);
            $vehicle = Vehicles::find($booking['vehicle_id']);
            $placeStart = PlaceStart::find($booking['placeStart_id']);
            $placeEnd = PlaceEnd::find($booking['placeEnd_id']);

            $booking['driver']=$driver;
            $booking['vehicle']=$vehicle;
            $booking['placeStart']=$placeStart;
            $booking['placeEnd']=$placeEnd;
            $response[]=$booking;
        }
        return response($response, 200);
    }

    public function allById(Request $request)
    {
        $bookings = Booking::where('agency_id', $request->id)->get();
        return response()->json($bookings, 200);
    }

    public function delete(Request $request){
        $booking = Booking::find($request->id);
        $booking->delete();
        return response()->json($booking, 200);
    }
}
