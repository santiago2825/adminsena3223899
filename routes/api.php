<?php

use App\Http\Controllers\Api\ApiApprenticeController;
use App\Http\Controllers\Api\ApiAreaController;
use App\Http\Controllers\Api\ApiComputerController;
use App\Http\Controllers\Api\ApiCourseController;
use App\Http\Controllers\Api\ApiEnvironmentController;
use App\Http\Controllers\Api\ApiOfferController;
use App\Http\Controllers\Api\ApiProgramController;
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
//aprendiz
Route::get('apprentice',[ApiApprenticeController::class,'index']);
Route::post('apprentice',[ApiApprenticeController::class,'store']);
Route::get('apprentice/{apprentices}',[ApiApprenticeController::class,'show']);
Route::put('apprentice/{apprentices}',[ApiApprenticeController::class,'update']);
Route::delete('apprentice/{apprentices}',[ApiApprenticeController::class,'destroy']);
//computer
Route::get('computer',[ApiComputerController::class,'index']);
Route::post('computer',[ApiComputerController::class,'store']);
Route::get('computer/{computers}',[ApiComputerController::class,'show']);
Route::put('computer/{computers}',[ApiComputerController::class,'update']);
Route::delete('computer/{computers}',[ApiComputerController::class,'destroy']);
//course
Route::get('course',[ApiCourseController::class,'index']);
Route::post('course',[ApiCourseController::class,'store']);
Route::get('course/{courses}',[ApiCourseController::class,'show']);
Route::put('course/{courses}',[ApiCourseController::class,'update']);
Route::delete('course/{courses}',[ApiCourseController::class,'destroy']);
//programa
Route::get('program',[ApiProgramController::class,'index']);
Route::post('program',[ApiProgramController::class,'store']);
Route::get('program/{programs}',[ApiProgramController::class,'show']);
Route::put('program/{programs}',[ApiProgramController::class,'update']);
Route::delete('program/{programs}',[ApiProgramController::class,'destroy']);
//areas
Route::get('area',[ApiAreaController::class,'index']);
Route::post('area',[ApiAreaController::class,'store']);
Route::get('area/{areas}',[ApiAreaController::class,'show']);
Route::put('area/{areas}',[ApiAreaController::class,'update']);
Route::delete('area/{areas}',[ApiAreaController::class,'destroy']);
//ofertas
Route::get('offer',[ApiOfferController::class,'index']);
Route::post('offer',[ApiOfferController::class,'store']);
Route::put('offer/{offers}',[ApiOfferController::class,'update']);
Route::delete('offer/{offers}',[ApiOfferController::class,'destroy']);
Route::get('offer/{offers}',[ApiOfferController::class,'show']);
//centros
Route::get('training_center',[ApiTrainingCenterController::class,'index']);
Route::get('training_center/{trainingCenters}',[ApiTrainingCenterController::class,'show']);
Route::post('training_center',[ApiTrainingCenterController::class,'store']);
Route::put('training_center/{trainingcenters}',[ApiTrainingCenterController::class,'update']);
Route::delete('training_center/{trainingcenters}',[ApiTrainingCenterController::class,'destroy']);
//teacher
Route::get('teacher',[ApiTeacherController::class,'index']);
Route::get('teacher/{id}',[ApiTeacherController::class,'show']);
Route::post('teacher',[ApiTeacherController::class,'store']);
Route::put('teacher/{teachers}',[ApiTeacherController::class,'update']);
Route::delete('teacher/{teachers}',[ApiTeacherController::class,'destroy']);
//ambientes
Route::get('environment', [ApiEnvironmentController::class, 'index']);
Route::post('environment', [ApiEnvironmentController::class, 'store']);
Route::get('environment/{id}', [ApiEnvironmentController::class, 'show']);
Route::put('environment/{environments}', [ApiEnvironmentController::class, 'update']);
Route::delete('environment/{environments}', [ApiEnvironmentController::class, 'destroy']); 