<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Centro;
use App\Http\Requests\CentroRequest;

class CentrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centro = Centro::select('id_centro_poblado', 'nombre')->get();
        return response()->json($centro);
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
    public function store(CentroRequest $request)
    {
        $centro = Centro::create($request->validated());
        $s = Centro::where('nombre',$centro->nombre)->first();
        return response()->json($s);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CentroRequest $request, Centro $centro)
    {
        $centro->update($request->all());
        return response()->json(['Succes'=>['succes' => 'Se actualizo el registro satidactoriamente']]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centro $centro)
    {
        $centro->delete();
        return response()->json(['Succes'=>['succes' => 'Se elimino el registro satidactoriamente']]);
    }
}
