<?php

namespace App\Http\Controllers;

use App\Models\Environment;
use App\Models\Training_center;
use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    public function index(){
        $environments = Environment::orderBy('id', 'asc')->paginate(5);
        return view('environment.index', compact('environments'));
    }

    public function create(){
        $training_centers = Training_center::all();
        return view('environment.create', compact('training_centers'));
    }

    public function show($id){
        $environment = Environment::find($id);
        return view('environment.show', compact('environment'));
    }

    public function store(Request $request){
        Environment::create($request->all());
        return redirect()->route('environment.index');
    }

    public function edit($id){
        $environment = Environment::find($id);
        $training_centers = Training_center::all();
        return view('environment.edit', compact('environment', 'training_centers'));
    }

    public function update(Request $request, $id){
        $environment = Environment::find($id);
        $environment->update($request->all());
        return redirect()->route('environment.index');
    }

    public function destroy($id){
        $environment = Environment::find($id);
        $environment->delete();
        return redirect()->route('environment.index');
    }
}
