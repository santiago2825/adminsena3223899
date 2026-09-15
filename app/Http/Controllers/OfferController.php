<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(){
        $offers = Offer::orderBy('id','asc')->paginate(5);
        return view('offer.index',compact('offers'));
    }
    public function create (){
        return view('offer.create');
    }
    public function store(Request $request){
        Offer::create($request->all());
        return redirect()->route('offer.index');
    }
    public function show($id){
        $offer = Offer::find($id);
        return view('offer.show', compact('offer'));
    }
    public function edit ($id){
        $offer=Offer::find($id);
        return view('offer.edit', compact('offer')) ;
    }
    public function update(Request $request, Offer $offer){
        $offer->update($request->all());
        return redirect()->route('offer.index');
    }
    public function destroy(Offer $offer){
        $offer->delete();
        return redirect()->route('offer.index');
    }
}
