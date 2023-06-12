<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingSevenAgentController;
use App\Http\Controllers\VehicleSevenAgentController;
use App\Http\Controllers\RestituedCarController;
use App\Http\Controllers\RetiredCarController;


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
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/users', [AuthController::class, 'index']);


    //Route::get('/booking/{id}', [BookingSevenAgentController::class, 'allById']);
    Route::get('/booking', [BookingSevenAgentController::class, 'index']);
    Route::delete('/booking/{id}', [BookingSevenAgentController::class, 'delete']);

    /*Route::get('/vehicle/{agency}', [VehicleSevenAgentController::class, 'allById']);
    Route::post('/vehicle', [VehicleSevenAgentController::class, 'createWithdrawalTicket']);*/
    Route::put('/vehicle/{agency}', [VehicleSevenAgentController::class, 'update']);

    Route::get('/retiredCar', [RetiredCarController::class, 'allRetiredCar']);
    Route::get('/retiredCarForm/{id}', [RetiredCarController::class, 'retiredCarFormById']);
    Route::put('/retiredCar/update/{id}', [RetiredCarController::class, 'update']);
    Route::delete('/retiredCar/{id}', [RetiredCarController::class, 'delete']);

    Route::get('/restituedCar', [RestituedCarController::class, 'allRestituedCar']);
    Route::delete('/restituedCar/{id}', [RestituedCarController::class, 'delete']);

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
