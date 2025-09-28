<?php

namespace App\Http\Controllers\Tarifa;

use App\Http\Controllers\Controller;
use App\Models\Tarifa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTarifaRequest;
use App\Http\Requests\UpdateTarifaRequest;
use Illuminate\Support\Facades\Log;
use App\Models\Ubicacion;

class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //$tarifas = Tarifa::all();
    $tarifas = Tarifa::with(['ubicacion'])
    ->get();
        return view('tarifa.index', compact('tarifas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarifa.create', [
            'ubicaciones' => Ubicacion::OrderBy('ciudad')->get(['id_ubicacion','ciudad']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTarifaRequest $request)
    {
        Tarifa::create($request->validated());
        return redirect()->route('tarifas.index')
            ->with('ok', 'La tarifa fue creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarifa $tarifas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarifa $tarifa)
    {
        //Log::info(gettype($tarifas));
        //Log::info(print_r($tarifas));

        return view('tarifa.edit', [
            'tarifa' => $tarifa,
            'ubicaciones' => Ubicacion::OrderBy('ciudad')->get(['id_ubicacion','ciudad']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTarifaRequest $request, Tarifa $tarifa)
    {
        $tarifa->update($request->validated());
        return redirect()->route('tarifas.index')->with('ok', 'La tarifa fue actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarifa $tarifa)
    {
        try {
            $tarifa->delete();
            return back()->with('ok', 'Tarifa eliminada correctamente.');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: la tarifa tiene registros relacionados.');
        }
    }
}

