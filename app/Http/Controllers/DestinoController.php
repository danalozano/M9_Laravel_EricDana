<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDestinoRequest;
use App\Http\Requests\UpdateDestinoRequest;
use App\Models\Destino;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinos = Destino::all();
        return view('destino.index', compact('destinos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destino.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDestinoRequest $request)
    {
        Destino::create($request->validated());

        return redirect()->route('destino.index')->with('success', 'Destino creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destino $destino)
    {
        return view('destino.show', compact('destino'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destino $destino)
    {
        return view('destino.edit', compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinoRequest $request, Destino $destino)
    {
        $destino->update($request->validated());

        return redirect()->route('destino.index')->with('success', 'Destino actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destino $destino)
    {
        $destino->delete();

        return redirect()->route('destino.index')->with('success', 'Destino eliminado exitosamente.');
    }
}
