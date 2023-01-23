<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
    return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Place::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'address'=> $request->address
            
        ]);
         return redirect('/places');
    }

    public function show($id)
    {
    
        $place = Place::find($id);
        return view ('show', compact('place'));
    }

    public function update($id, Request $request)
    { 
        $place = Place::find($id);
        $place->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'address'=>$request->address
        ]);
        return redirect('/places');
    }

    public function edit($id)
    {
        $places = Place::find($id);
        return view('edit', compact('places'));
    }

    public function delete($id)
    {
        $places = Place::find($id);
        $places->delete();
        return view('places');
    }




}
