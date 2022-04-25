<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Agencies;
use Illuminate\Http\Request;

class BookingSevenAgentController extends Controller
{
    public function index()
    {
        return Booking::all();
    }

    public function allById(Request $request)
    {
        $bookings = Booking::where('agency_id', $request->id)->get();
        return response()->json($bookings, 200);
    }
}
