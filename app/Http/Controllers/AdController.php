<?php

namespace App\Http\Controllers;
use App\Http\Requests\Adstore;
use Illuminate\Http\Request;
use App\Ad;

class AdController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function liste()
    {
        $ads = Ad::all();
        return view('welcome', compact('ads'));
    }
    public function store(Adstore $request)
    {
       $validated = $request->validated();
      
       $ad = new Ad();
       $ad->title = $validated['title'];
       $ad->description = $validated['description'];
       $ad->localisation = $validated['localisation'];
       $ad->price = $validated['price'];
       $ad->save();

       return redirect()->route('welcome')->with('success', 'votre annonce a ete poster.');
    }
}
