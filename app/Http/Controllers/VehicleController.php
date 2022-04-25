<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class VehicleController {
    public static function list_vehicles($request) {
        $user = $request->user();
        if ($user->is_seven_agent()) {

            $json = $request->json();

            if ($json->get("agency") == null) {
                return [
                    "error" => "The user isn't allowed to list all vehicles"
                ];
            };

            if ((int)($json->get("agency")) != $user->agency->id) {
                return [
                    "error" => "The user can only list vehicles from his agency"
                ];
            };

            return Vehicle::where("agency_id", $user->agency->id)->get();
            
        } else {
            return [
                "error" => "The user doesn't have the permission to access list of vehicles"
            ];
        }
    }
}