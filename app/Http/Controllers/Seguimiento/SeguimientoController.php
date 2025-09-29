<?php

namespace App\Http\Controllers\Seguimiento;

use App\Http\Controllers\Controller;
use App\Models\Seguimiento;
use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSeguimientoRequest;
use App\Http\Requests\UpdateSeguimientoRequest;
use Illuminate\Support\Facades\Log;

class SeguimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seguimientos = Seguimiento::with(['empleado'])->get();
        return view('seguimiento.index', compact('seguimientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seguimiento.create', [
            'empleados' => Empleado::with('persona')->orderBy('id_empleado')->get(['id_empleado', 'codigo_empleado']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSeguimientoRequest $request)
    {
        Seguimiento::create($request->validated());
        return redirect()->route('seguimientos.index')
            ->with('ok', 'El evento de seguimiento fue registrado correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seguimiento $seguimiento)
    {
        return view('seguimiento.edit', [
            'seguimiento' => $seguimiento,
            'empleados' => Empleado::with('persona')->orderBy('id_empleado')->get(['id_empleado', 'codigo_empleado']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSeguimientoRequest $request, Seguimiento $seguimiento)
    {
        $seguimiento->update($request->validated());
        return redirect()->route('seguimientos.index')
            ->with('ok', 'El evento de seguimiento fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seguimiento $seguimiento)
    {
        try {
            $seguimiento->delete();
            return back()->with('ok', 'Seguimiento eliminado correctamente.');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: el seguimiento tiene registros relacionados.');
        }
    }
}
