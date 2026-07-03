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

    public function store (Request $request){

        $trainingcenter = Training_center::create($request->all());
        return $trainingcenter;
    }
}

