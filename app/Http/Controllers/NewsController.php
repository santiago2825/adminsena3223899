<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('id','asc')->paginate(5);
        return view('new.index',compact('news'));
    }
    public function home(){
    // Traemos las últimas noticias creadas
    $news = News::orderBy('id', 'desc')->get(); 
    return view('welcome', compact('news')); // Vista del Home con tarjetas
    }
    public function create(){
        return view('new.create');
    }
    public function show($id){
        $news = News::find($id);
        return view('new.show',compact('news'));
    }
    public function store(Request $request){
    $new = News::create($request->all());
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $nombreArchivo = 'foto_' . time() . '.' . $file->guessExtension();
        $file->storeAs('public/images', $nombreArchivo);
        $new->image = $nombreArchivo;
        $new->save();
    }
    return redirect()->route('new.index');
    }

    public function edit ($id){
        $news=News::find($id);
        return view('new.edit', compact('news')) ;
    }
    public function update(Request $request, $id){
    $news = News::findOrFail($id);
    $news->title = $request->title;
    $news->description = $request->description;
    $news->date = $request->date;

    // Si se marcó la casilla de eliminar, limpia el campo en la BD
    if ($request->has('delete_image')) {
        $news->image = null;
    } 
    // Si no se marcó borrar pero sí se adjuntó un archivo nuevo
    elseif ($request->hasFile('image')) {
        $file = $request->file('image');
        $nombreArchivo = 'foto_' . time() . '.' . $file->guessExtension();
        $file->storeAs('public/images', $nombreArchivo);
        $news->image = $nombreArchivo;
    }
    $news->save();
    return redirect()->route('new.index');
    }
    public function destroy(News $news){
        $news->delete();
        return redirect()->route('new.index');
    }
}
