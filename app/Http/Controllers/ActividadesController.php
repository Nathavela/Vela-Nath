<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return view('actividades.index', compact('actividades'));
    }

    public function create()
    {
        return view('actividades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'dia' => 'required|string|max:255',
            'horario' => 'required|string|max:255',

        ]);

        Actividad::create($request->all());

        return redirect()->route('actividades.index')->with('success', 'Actividad creada correctamente.');
    }

    public function show(Actividad $actividad)
    {
        return view('actividades.show', compact('actividad'));
    }

    public function edit(Actividad $actividad)
    {
        return view('actividades.edit', compact('actividad'));
    }

    public function update(Request $request, Actividad $actividad)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'dia' => 'required|string|max:255',
            'horario' => 'required|string|max:255',

        ]);

        $actividad->update($request->all());

        return redirect()->route('actividades.index')->with('success', 'Actividad actualizada correctamente.');
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();

        return redirect()->route('actividades.index')->with('success', 'Actividad eliminada correctamente.');
    }
}
