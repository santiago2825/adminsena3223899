<?php

use App\Http\Controllers\Api\ApiAreaController;
use App\Http\Controllers\Api\ApiEnvironmentController;
use App\Http\Controllers\Api\ApiOfferController;
use App\Http\Controllers\Api\ApiTeacherController;
use App\Http\Controllers\Api\ApiTrainingCenterController;
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
route::get('area',[ApiAreaController::class,'index']);
route::post('area',[ApiAreaController::class,'store']);
route::get('area/{areas}',[ApiAreaController::class,'show']);
route::put('area/{areas}',[ApiAreaController::class,'update']);
route::delete('area/{areas}',[ApiAreaController::class,'destroy']);
//ofertas
route::get('offer',[ApiOfferController::class,'index']);
route::post('offer',[ApiOfferController::class,'store']);
route::put('offer/{offers}',[ApiOfferController::class,'update']);
route::delete('offer/{offers}',[ApiOfferController::class,'destroy']);
route::get('offer/{offers}',[ApiOfferController::class,'show']);
//centros
route::get('training_center',[ApiTrainingCenterController::class,'index']);
route::get('training_center/{trainingCenters}',[ApiTrainingCenterController::class,'show']);
route::post('training_center',[ApiTrainingCenterController::class,'store']);
route::put('training_center/{trainingcenters}',[ApiTrainingCenterController::class,'update']);
route::delete('training_center/{trainingcenters}',[ApiTrainingCenterController::class,'destroy']);
//teacher
route::get('teacher',[ApiTeacherController::class,'index']);
route::get('teacher/{id}',[ApiTeacherController::class,'show']);
route::post('teacher',[ApiTeacherController::class,'store']);
route::put('teacher/{teachers}',[ApiTeacherController::class,'update']);
route::delete('teacher/{teachers}',[ApiTeacherController::class,'destroy']);
//ambientes
Route::get('environment', [ApiEnvironmentController::class, 'index']);
Route::post('environment', [ApiEnvironmentController::class, 'store']);
Route::get('environment/{id}', [ApiEnvironmentController::class, 'show']);
Route::put('environment/{environments}', [ApiEnvironmentController::class, 'update']);
Route::delete('environment/{environments}', [ApiEnvironmentController::class, 'destroy']); 