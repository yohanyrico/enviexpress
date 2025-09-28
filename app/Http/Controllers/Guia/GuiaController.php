<?php

namespace App\Http\Controllers\Guia;

use App\Http\Controllers\Controller;
use App\Models\Guia;
use App\Models\Persona;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreGuiaRequest;
use App\Http\Requests\UpdateGuiaRequest;

class GuiaController extends Controller
{
    public function index()
    {
        $guias = Guia::with(['remitente', 'destinatario'])->get();
        return view('guias.index', compact('guias'));
    }

    public function create()
    {
        return view('guias.create', [
            'guia' => null,
            'remitentes' => Persona::where('tipo_persona', 'remitente')->orderBy('nombres')->get(['id_persona', 'nombres', 'apellidos']),
            'destinatarios' => Persona::where('tipo_persona', 'destinatario')->orderBy('nombres')->get(['id_persona', 'nombres', 'apellidos']),
        ]);
    }

    public function store(StoreGuiaRequest $request)
    {
        Guia::create($request->validated());
        return redirect()->route('guias.index')->with('ok', 'La guía fue creada correctamente.');
    }

    public function edit(Guia $guia)
    {
        return view('guias.edit', [
            'guia' => $guia,
            'remitentes' => Persona::where('tipo_persona', 'remitente')->orderBy('nombres')->get(['id_persona', 'nombres', 'apellidos']),
            'destinatarios' => Persona::where('tipo_persona', 'destinatario')->orderBy('nombres')->get(['id_persona', 'nombres', 'apellidos']),
        ]);
    }

    public function update(UpdateGuiaRequest $request, Guia $guia)
    {
        $guia->update($request->validated());
        return redirect()->route('guias.index')
        ->with('ok', 'La guía fue actualizada correctamente.');
    }

    public function destroy(Guia $guia)
    {
        try {
            $guia->delete();
            return back()->with('ok', 'Guía eliminada correctamente.');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: la guía tiene registros relacionados.');
        }
    }
}
