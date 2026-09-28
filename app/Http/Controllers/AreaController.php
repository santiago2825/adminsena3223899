<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    
    public function index(){
        $areas = Area::orderBy('id', 'asc')-> paginate(5);
        return view('area.index', compact('areas'));
    }
    public function create(){
        return view ('area.create');
    }
    public function show($id){
        $area=Area::find($id);
        return view('area.show', compact('area')) ;

    }
    public function store (Request $request){
        $request->validate([
            'name' => 'required|max:255',
        ]);
        Area::create($request->all());
        return redirect()->route('area.index');
        
    }
    public function edit ($id){
        $area=Area::find($id);
        return view('area.edit',compact('area'));
    }
    public function update(Request $request, Area $areas){
        $request->validate([
            'name' => 'required|max:255',
            ]);
        $areas->update($request->all());
        return redirect()->route('area.index');
    }
    public function destroy(Area $areas){
        $areas->delete();
        return response()->route('area.index');
    }
}
