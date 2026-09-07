<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::ordeyBy('id','asc')->paginate(5);
        return view('new.index',compact('news'));
    }
    public function create(){
        return view('new.create');
    }
}
