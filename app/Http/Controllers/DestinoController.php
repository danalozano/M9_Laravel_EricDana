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
        $destino = Destino::all();
        return view('destino.index', compact('destino'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDestinoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Destino $destino)
    {
        $destino = Destino::find($id);
        return view('destino.show', compact('destino'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destino $destino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinoRequest $request, Destino $destino)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destino $destino)
    {
        //
    }
}
