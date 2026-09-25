<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    
    public function index(){
        $areas = Area::all();
        return response()->json($areas);
    }
    public function create(){
        return view ('area.create');
    }
    public function show($id){
        $areas=Area::find($id);
        //return view('area.show', compact('area')) ;
        return response()->json($areas);

    }
    public function store (Request $request){
        //Area::create($request->all());
        //return redirect()->route('area.index');
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $areas = Area::create($request->all());
        return response()->json($areas);
    }
    public function edit ($id){
        $area=Area::find($id);
        return response()->json($area);
    }
    public function update(Request $request, Area $areas){
        $request->validate([
            'name' => 'required|max:255',
            ]);
        $areas->update($request->all());
        return response()->json($areas);
    }
    public function destroy(Area $areas){
        $areas->delete();
        return response()->json($areas);
    }
}
