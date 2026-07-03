<?php

use App\Http\Controllers\ApprenticeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Consult;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
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
route::get('area/list',[AreaController::class,'index'])->name('area.index');
route::get('area/{id}',[AreaController::class,'show'])->name('area.show');
route::get('area/create',[AreaController::class,'create']);
route::post('area/store',[AreaController::class,'store'])->name('area.store');
//computer
route::get('computer/list',[ComputerController::class,'index'])->name('computer.index');
route::get('computer/create',[ComputerController::class,'create']);
route::post('computer/store',[ComputerController::class,'store'])->name('computer.store');
//trainigcenter
route::get('training_center/list',[TrainingCenterController::class,'index'])->name('training_center.index');
route::get('training_center/create',[TrainingCenterController::class,'create']);
route::post('training_center/store',[TrainingCenterController::class,'store'])->name('training_center.store');
//teacher
route::get('teacher/list',[TeacherController::class,'index'])->name('teacher.index');
route::get('teacher/create',[TeacherController::class,'create']);
route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');
//course
route::get('course/list',[CourseController::class,'index'])->name('course.index');
route::get('course/create',[CourseController::class,'create']);
route::post('course/store',[CourseController::class,'store'])->name('course.store');
//apprentices
route::get('apprentice/list',[ApprenticeController::class,'index'])->name('apprentice.index');
route::get('apprentice/{id}',[ApprenticeController::class,'show'])->name('apprentice.show');
route::get('apprentice/create',[ApprenticeController::class,'create']);
route::post('apprentice/store',[ApprenticeController::class,'store'])->name('apprentice.store');

