<?php

namespace App\Http\Controllers;
use App\Http\Requests\Adstore;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(Adstore $request)
    {
       $validated = $request->validated();
      
       $ad = new Ad();
       $ad->title = $validated('title');
       $ad->description = $validated('description');
       $ad->localisation = $validated('localisation');
       $ad->price = $validated('price');
       $ad->save();

       return redirect()->route('welcome')->with('success', 'votre annonce a ete poster.');
    }
}