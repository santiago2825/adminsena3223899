<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\OfferController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//areas
route::get('area',[AreaController::class,'index']);
route::post('area',[AreaController::class,'store']);
route::get('area/{areas}',[AreaController::class,'show']);
route::put('area/{areas}',[AreaController::class,'update']);
route::delete('area/{areas}',[AreaController::class,'destroy']);
//ofertas
route::get('offer',[OfferController::class,'index']);
route::post('offer',[OfferController::class,'store']);
route::put('offer/{offers}',[OfferController::class,'update']);
route::delete('offer/{offers}',[OfferController::class,'destroy']);
route::get('offer/{offers}',[OfferController::class,'show']);