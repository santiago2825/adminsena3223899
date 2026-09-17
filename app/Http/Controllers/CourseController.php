<?php

namespace App\Http\Controllers;


use App\Models\course;
use App\Models\Environment;
use App\Models\Program;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::orderBy('id', 'asc')-> paginate(5);
        return view('course.index',compact('courses')) ;
    }
    public function create(){
        $programs = Program::all();
        $environments = Environment::all();
        return view('course.create', compact('environments', 'programs'));
    }
    public function show($id){
        $course=course::find($id);
        return view('course.show', compact('course')) ;
    }
    public function store(Request $request){
        course::create($request->all());
        return redirect()->route('course.index');
    }
    public function edit ($id){
        $course=course::find($id);
        $environments = Environment::all();
        $programs = Program::all();
        return view('course.edit', compact('course','environments','programs')) ;
    }
    public function update(Request $request, course $course){
        $course->update($request->all());
        return redirect()->route('course.index');
    }
    public function destroy(course $course){
        $course->delete();
        return redirect()->route('course.index');
    }
}
