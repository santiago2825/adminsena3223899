<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Teacher;
use App\Models\Training_center;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::orderBy('id', 'asc')-> get();
        return view('teacher.index',compact('teachers')) ;
    }
    public function create(){
        $areas = Area::all();
        $training_centers = Training_center::all();
        return view('teacher.create', compact('areas','training_centers'));
    }
    public function show($id){
        $teacher=Teacher::find($id);
        return view('teacher.show', compact('teacher')) ;
    }

    public function store(Request $request){
        Teacher::create($request->all());
        return redirect()->route('teacher.index');
    }
    public function edit ($id){
        $teacher=Teacher::find($id);
        $areas = Area::all();
        $training_centers = Training_center::all();
        return view('teacher.edit', compact('teacher','areas','training_centers')) ;
    }
    public function update(Request $request, Teacher $teacher){
        $teacher->update($request->all());
        return redirect()->route('teacher.index');
    }
    public function destroy(Teacher $teacher){
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}
