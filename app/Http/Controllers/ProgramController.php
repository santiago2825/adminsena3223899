<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Training_center;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        $programs = Program::orderBy('id','asc')->paginate(5);
        return view('program.index',compact('programs'));
    }
    public function create(){
        $training_centers = Training_center::all();
        return view('program.create',compact('training_centers'));
    }
    public function show($id){
        $programs = Program::find($id);
        return view('program.show', compact('programs'));
    }
    public function store (Request $request){
        Program::create($request->all());
        return redirect()->route('program.index');
    }
    public function edit ($id){
        $programs=Program::find($id);
        $training_centers = Training_center::all();
        return view('program.edit', compact('programs','training_centers')) ;
    }
    public function update(Request $request, Program $programs){
        $programs->update($request->all());
        return redirect()->route('program.index');
    }
    public function destroy(Program $program){
        $program->delete();
        return redirect()->route('program.index');
    }
}
