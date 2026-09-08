<?php

use App\Http\Controllers\ApprenticeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Consult;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\NewsController;
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
//home
Route::get('/', function () {
    return view('welcome');
});
//about
Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registro', function () {
    return view('registro');
});
//areas
route::get('area/list',[AreaController::class,'index'])->name('area.index');
route::get('area/create',[AreaController::class,'create'])->name('area.create');
route::get('area/{id}',[AreaController::class,'show'])->name('area.show');
route::post('area/store',[AreaController::class,'store'])->name('area.store');
route::get('area/{id}/edit',[AreaController::class,'edit'])->name('area.edit');
route::put('area/{area}',[AreaController::class,'update'])->name('area.update');
route::delete('area/{area}',[AreaController::class,'destroy'])->name('area.destroy');


//computer
route::get('computer/list',[ComputerController::class,'index'])->name('computer.index');
route::get('computer/create',[ComputerController::class,'create'])->name('computer.create');
route::get('computer/{id}',[ComputerController::class,'show'])->name('computer.show');
route::post('computer/store',[ComputerController::class,'store'])->name('computer.store');
route::get('computer/{id}/edit',[ComputerController::class,'edit'])->name('computer.edit');
route::put('computer/{computer}',[ComputerController::class,'update'])->name('computer.update');
route::delete('computer/{computer}',[ComputerController::class,'destroy'])->name('computer.destroy');
//trainigcenter
route::get('training_center/list',[TrainingCenterController::class,'index'])->name('training_center.index');
route::get('training_center/create',[TrainingCenterController::class,'create'])->name('training_center.create');
route::get('training_center/{id}',[TrainingCenterController::class,'show'])->name('training_center.show');
route::post('training_center/store',[TrainingCenterController::class,'store'])->name('training_center.store');
route::get('training_center/{id}/edit',[TrainingCenterController::class,'edit'])->name('training_center.edit');
route::put('training_center/{training_center}',[TrainingCenterController::class,'update'])->name('training_center.update');
route::delete('training_center/{trainingcenter}',[TrainingCenterController::class,'destroy'])->name('training_center.destroy');
//teacher
route::get('teacher/list',[TeacherController::class,'index'])->name('teacher.index');
route::get('teacher/create',[TeacherController::class,'create'])->name('teacher.create');
route::get('teacher/{id}',[TeacherController::class,'show'])->name('teacher.show');
route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');
route::get('teacher/{id}/edit',[TeacherController::class,'edit'])->name('teacher.edit');
route::put('teacher/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');
//course
route::get('course/list',[CourseController::class,'index'])->name('course.index');
route::get('course/create',[CourseController::class,'create'])->name('course.create');
route::get('course/{id}',[CourseController::class,'show'])->name('course.show');
route::post('course/store',[CourseController::class,'store'])->name('course.store');
route::get('course/{id}/edit',[CourseController::class,'edit'])->name('course.edit');
route::put('course/{course}',[CourseController::class,'update'])->name('course.update');
route::delete('course/{course}',[CourseController::class,'destroy'])->name('course.destroy');
//apprentices
route::get('apprentice/list',[ApprenticeController::class,'index'])->name('apprentices.index');
route::get('apprentice/create',[ApprenticeController::class,'create'])->name('apprentices.create');
route::get('apprentice/{id}',[ApprenticeController::class,'show'])->name('apprentices.show');
route::post('apprentice/store',[ApprenticeController::class,'store'])->name('apprentices.store');
route::get('apprentice/{id}/edit',[ApprenticeController::class,'edit'])->name('apprentices.edit');
route::put('apprentice/{apprentice}',[ApprenticeController::class,'update'])->name('apprentices.update');
route::delete('apprentice/{apprentice}',[ApprenticeController::class,'destroy'])->name('apprentices.destroy');
//noticias
route::get('new/list',[NewsController::class,'index'])->name('new.index');
route::get('new/create',[NewsController::class,'create'])->name('new.create');
route::post('new/store',[NewsController::class,'store'])->name('new.store');
route::put('new/{id}',[NewsController::class,'update'])->name('new.update');
route::delete('new/{news}',[NewsController::class,'destroy'])->name('new.destroy');
route::get('new/{id}',[NewsController::class,'show'])->name('new.show');
route::get('new/{id}/edit',[NewsController::class,'edit'])->name('new.edit');
// Ruta pública del Home (Tarjetas)
Route::get('/', [NewsController::class,'home'])->name('home');