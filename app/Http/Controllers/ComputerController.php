<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use App\Models\Environment;

class ComputerController extends Controller
{
    public function index(){
        $computers = Computer::orderBy('id', 'asc')-> paginate(3);
        return view('computer.index',compact('computers')) ;
    }
    public function create(){
        $environments = Environment::all();
        return view('computer.create', compact('environments'));
    }
    public function show($id){
        $computer=Computer::find($id);
        return view('computer.show', compact('computer')) ;
    }
    public function store (Request $request){
        Computer::create($request->all());
        return redirect()->route('computer.index');
    }
    public function edit ($id){
        $computer=Computer::find($id);
        $environments = Environment::all();
        return view('computer.edit', compact('computer', 'environments')) ;
    }
    public function update(Request $request, Computer $computer){
        $computer->update($request->all());
        return redirect()->route('computer.index');
    }
    public function destroy(Computer $computer){
        $computer->delete();
        return redirect()->route('computer.index');
    }
}
