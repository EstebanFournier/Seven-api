<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingSevenAgentController;
use App\Http\Controllers\VehicleSevenAgentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* include "apilogin.php";

Route::middleware('auth:sanctum')->post('/vehicle/list', function (Request $request) {
    return VehicleController::list_vehicles($request);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */


// Public routes


// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/booking/{id}', [BookingSevenAgentController::class, 'allById']);

    Route::get('/vehicle/{agency}', [VehicleSevenAgentController::class, 'allById']);
    Route::put('/vehicle/{agency}', [VehicleSevenAgentController::class, 'update']);
    Route::post('/vehicle', [VehicleSevenAgentController::class, 'createWithdrawalTicket']);

    Route::get('/booking', [BookingSevenAgentController::class, 'index']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
