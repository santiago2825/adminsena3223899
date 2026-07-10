<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    public function index(){
        $trainingcenters = Training_center::orderBy('id', 'desc')-> get();
        return view('training_center.index',compact('trainingcenters')) ;
    }
    public function create(){
        return view ('training_center.create');
    }
    public function show($id){
        $trainingcenter=Training_center::find($id);
        return view('training_center.show', compact('trainingcenter')) ;
    }

    public function store (Request $request){
        Training_center::create($request->all());
        return redirect()->route('training_center.index');
    }
}

