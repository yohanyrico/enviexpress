<?php

namespace App\Http\Controllers\Tarifas;

use App\Http\Controllers\Controller;
use App\Models\Tarifa;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;
use App\Http\Requests\StoreTarifasRequest;
use App\Http\Requests\UpdateTarifasRequest;

class TarifasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarifas = Tarifa::all();
        return view('tarifas.index',compact('tarifas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('tarifas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'nombre_tarifa'        => 'required|string|max:255',
            'ubicacion_origen'     => 'required|string|max:255',
            'ubicacion_destino'    => 'required|string|max:255',
            'tipo_servicio'        => 'required|string|max:255',
            'peso_minimo_kg'       => 'required|numeric|min:0',
            'peso_maximo_kg'       => 'required|numeric|min:0',
            'tarifa_base'          => 'required|numeric|min:0',
            'tarifa_adicional_kg'  => 'required|numeric|min:0',
            'tiempo_entrega_horas' => 'required|numeric|min:0',
            'vigencia_desde'       => 'required|date',
            'vigencia_hasta'       => 'required|date|after_or_equal:vigencia_desde',
        ]);

        // Crear registro
        Tarifa::create($validated);

        // Redirigir con mensaje de éxito
        return redirect()
            ->route('tarifas.index')
            ->with('ok', 'Tarifa creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarifa $tarifa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarifa $tarifa)
    {
        return view('tarifas.edit', compact('tarifa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarifa $tarifa)
    {
         $validated = $request->validate([
        'nombre_tarifa' => 'required|string|max:255',
        'ubicacion_origen' => 'required|string|max:255',
        'ubicacion_destino' => 'required|string|max:255',
        'tipo_servicio' => 'required|string|max:255',
        'peso_minimo_kg' => 'required|numeric',
        'peso_maximo_kg' => 'required|numeric',
        'tarifa_base' => 'required|numeric',
        'tarifa_adicional_kg' => 'required|numeric',
        'tiempo_entrega_horas' => 'required|numeric',
        'vigencia_desde' => 'required|date',
        'vigencia_hasta' => 'required|date',
    ]);

    $tarifa->update($validated);

    return redirect()->route('tarifas.index')
                     ->with('ok', 'Tarifa actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarifa $tarifa)
    {
        $tarifa->delete();

        return redirect()
            ->route('tarifas.index')
            ->with('ok', 'Tarifa eliminada correctamente.');
    }
}
