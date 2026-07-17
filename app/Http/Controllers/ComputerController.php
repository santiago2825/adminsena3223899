<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function index(){
        $computers = Computer::orderBy('id', 'desc')-> get();
        return view('computer.index',compact('computers')) ;
    }
    public function create(){
        return view ('computer.create');
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
        return view('computer.edit', compact('computer')) ;
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
