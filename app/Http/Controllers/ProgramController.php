<?php

namespace App\Http\Controllers;

use App\Models\Offer;
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
        $offer = Offer::all();
        return view('program.create',compact('training_centers','offer'));
    }
    public function show($id){
        $program = Program::find($id);
        return view('program.show', compact('program'));
    }
    public function store (Request $request){
        Program::create($request->all());
        return redirect()->route('program.index');
    }
    public function edit ($id){
        // Corregido: $program en singular y findOrFail para validar que el ID exista
        $program = Program::findOrFail($id);
        $training_centers = Training_center::all();
        $offer = Offer::all();
        return view('program.edit', compact('program', 'training_centers','offer'));
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
