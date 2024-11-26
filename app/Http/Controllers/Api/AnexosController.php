<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anexo;
use App\Http\Requests\AnexoRequest;

class AnexosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anexo = Anexo::select('id_caserio_anexo', 'nombre')->get();
        return response()->json($anexo);
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
    public function store(AnexoRequest $request)
    {
        Anexo::create($request->validated());
        return response()->json($request);
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
    public function update(AnexoRequest $request, Anexo $anexo)
    {
        $anexo->update($request->all());
        return response()->json(['Succes'=>['succes' => 'Se actualizo el registro satidactoriamente']]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anexo $anexo)
    {
        $anexo->delete();
        return response()->json(['Succes'=>['succes' => 'Se elimino el registro satidactoriamente']]);
    }
}