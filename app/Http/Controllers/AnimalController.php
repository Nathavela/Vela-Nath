<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animales = Animal::all();
       
        return view('animales.index', compact('animales'));
    }

    public function create()
    {

        return view('animales.create');
    }

    public function store(Request $request)
    {
   
        $request->validate([
            'nombre' => 'required|string|max:255',
            
        ]);

        
        Animal::create($request->all());

        
        return redirect()->route('animales.index')->with('success', 'Animal creado correctamente.');
    }

    public function show(Animal $animal)
    {
        
        return view('animales.show', compact('animal'));
    }

    public function edit(Animal $animal)
    {
        
        return view('animales.edit', compact('animal'));
    }

    public function update(Request $request, Animal $animal)
    {
        
        $request->validate([
            'nombre' => 'required|string|max:255',
            
        ]);

        
        $animal->update($request->all());

       
        return redirect()->route('animales.index')->with('success', 'Animal actualizado correctamente.');
    }

    public function destroy(Animal $animal)
    {
        
        $animal->delete();

        
        return redirect()->route('animales.index')->with('success', 'Animal eliminado correctamente.');
    }
}


