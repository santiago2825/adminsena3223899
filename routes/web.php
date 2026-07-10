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
route::get('area/create',[AreaController::class,'create']);
route::get('area/{id}',[AreaController::class,'show'])->name('area.show');
route::post('area/store',[AreaController::class,'store'])->name('area.store');
//computer
route::get('computer/list',[ComputerController::class,'index'])->name('computer.index');
route::get('computer/create',[ComputerController::class,'create']);
route::get('computer/{id}',[ComputerController::class,'show'])->name('computer.show');
route::post('computer/store',[ComputerController::class,'store'])->name('computer.store');
//trainigcenter
route::get('training_center/list',[TrainingCenterController::class,'index'])->name('training_center.index');
route::get('training_center/create',[TrainingCenterController::class,'create']);
route::get('training_center/{id}',[TrainingCenterController::class,'show'])->name('training_center.show');
route::post('training_center/store',[TrainingCenterController::class,'store'])->name('training_center.store');
//teacher
route::get('teacher/list',[TeacherController::class,'index'])->name('teacher.index');
route::get('teacher/create',[TeacherController::class,'create']);
route::get('teacher/{id}',[TeacherController::class,'show'])->name('teacher.show');
route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');
//course
route::get('course/list',[CourseController::class,'index'])->name('course.index');
route::get('course/create',[CourseController::class,'create']);
route::get('course/{id}',[CourseController::class,'show'])->name('course.show');
route::post('course/store',[CourseController::class,'store'])->name('course.store');
//apprentices
route::get('apprentice/list',[ApprenticeController::class,'index'])->name('apprentices.index');
route::get('apprentice/create',[ApprenticeController::class,'create']);
route::get('apprentice/{id}',[ApprenticeController::class,'show'])->name('apprentices.show');
route::post('apprentice/store',[ApprenticeController::class,'store'])->name('apprentices.store');

