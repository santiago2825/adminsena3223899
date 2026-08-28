<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\computer;
use App\Models\course;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index(){
        $apprentices = Apprentice::orderBy('id', 'asc')-> paginate(5);
        return view('apprentices.index',compact('apprentices')) ;
    }
    public function create(){
        $computers = computer::all();
        $courses = course::all();
        return view('apprentices.create', compact('computers','courses'));
    }
    public function show($id){
        $apprentice=Apprentice::find($id);
        return view('apprentices.show', compact('apprentice')) ;
    }
    public function store(Request $request){
        Apprentice::create($request->all());
        return redirect()->route('apprentices.index');
    }
    public function edit ($id){
        $apprentice=Apprentice::find($id);
        $computers = computer::all();
        $courses = course::all();
        return view('apprentices.edit', compact('apprentice','computers','courses')) ;
    }
    public function update(Request $request, Apprentice $apprentice){
        $apprentice->update($request->all());
        return redirect()->route('apprentices.index');
        
    }
    public function destroy(Apprentice $apprentice){
        $apprentice->delete();
        return redirect()->route('apprentices.index');
    }
    
}
