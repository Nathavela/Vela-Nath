<?php
namespace App\Http\Controllers;

use App\Models\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller
{
    public function index()
    {
        $especies = Especie::all();
        return view('especies.index', compact('especies'));
    }

    public function create()
    {
        return view('especies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            
        ]);

        Especie::create($request->all());

        return redirect()->route('especies.index')->with('success', 'Especie creada correctamente.');
    }

    public function show(Especie $especie)
    {
        return view('especies.show', compact('especie'));
    }

    public function edit(Especie $especie)
    {
        return view('especies.edit', compact('especie'));
    }

    public function update(Request $request, Especie $especie)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            
        ]);

        $especie->update($request->all());

        return redirect()->route('especies.index')->with('success', 'Especie actualizada correctamente.');
    }

    public function destroy(Especie $especie)
    {
        $especie->delete();

        return redirect()->route('especies.index')->with('success', 'Especie eliminada correctamente.');
    }
}
