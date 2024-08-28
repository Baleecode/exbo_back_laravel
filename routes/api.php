<?php

use App\Http\Controllers\api\PlaceController;
use App\Http\Controllers\api\RateController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/place', [PlaceController::class,'readAll']);
Route::get('/user', [UserController::class,'readAll']);
Route::get('/rate', [RateController::class,'readAll']);

Route::post('/register', [UserController::class,'register']);
Route::post('/login', [UserController::class,'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/place/recommendation/limit', [PlaceController::class, 'readRecommendationLimit']);
    Route::get('/place/search/location/{name}', [PlaceController::class, 'searchByCity']);

    Route::get('/rate/user/{id}', [RateController::class,'whereUserId']); 
});