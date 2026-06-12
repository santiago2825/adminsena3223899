<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Consult;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/consultas',[Consult::class,'Consultas']);
//areas
route::get('area/create',[AreaController::class,'create']);
route::post('area/store',[AreaController::class,'store'])->name('area.store');
//computer
route::get('computer/create',[ComputerController::class,'create']);
route::post('computer/store',[ComputerController::class,'store'])->name('computer.store');
//trainigcenter
route::get('training_center/create',[TrainingCenterController::class,'create']);
route::post('training_center/store',[TrainingCenterController::class,'store'])->name('training_center.store');

