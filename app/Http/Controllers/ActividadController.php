<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Http\Requests\ActividadRequest;

/**
 * Class ActividadController
 * @package App\Http\Controllers
 */
class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actividads = Actividad::paginate();

        return view('actividad.index', compact('actividads'))
            ->with('i', (request()->input('page', 1) - 1) * $actividads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actividad = new Actividad();
        return view('actividad.create', compact('actividad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActividadRequest $request)
    {
        Actividad::create($request->validated());

        return redirect()->route('actividads.index')
            ->with('success', 'Actividad created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $actividad = Actividad::find($id);

        return view('actividad.show', compact('actividad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $actividad = Actividad::find($id);

        return view('actividad.edit', compact('actividad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActividadRequest $request, Actividad $actividad)
    {
        $actividad->update($request->validated());

        return redirect()->route('actividads.index')
            ->with('success', 'Actividad updated successfully');
    }

    public function destroy($id)
    {
        Actividad::find($id)->delete();

        return redirect()->route('actividads.index')
            ->with('success', 'Actividad deleted successfully');
    }
}
