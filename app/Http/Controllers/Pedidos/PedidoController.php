<?php

namespace App\Http\Controllers\Pedidos;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use Illuminate\Support\Facades\Log;
use App\Models\Guia;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$pedidos = Pedido::all();
        $pedidos = Pedido::with(['guia'])
            ->get();

        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos.create', [
            'guias' => Guia::orderBy('numero_guia')->get(['id_guia', 'numero_guia']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePedidoRequest $request)
    {
        Pedido::create($request->validated());

        return redirect()->route('pedidos.index')
            ->with('ok', 'El pedido fue creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //Log::info(gettype($pedido));
        //Log::info(print_r($pedido));

        return view('pedidos.edit', [
            'pedido' => $pedido,
            'guias' => Guia::orderBy('numero_guia')->get(['id_guia', 'numero_guia']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePedidoRequest $request, Pedido $pedido)
    {
        $pedido->update($request->validated());
        return redirect()->route('pedidos.index')
            ->with('ok', 'El pedido fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        try {
            $pedido->delete();
            return back()->with('ok', 'Pedido eliminado correctamente.');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: el pedido tiene registros relacionados.');
        }
    }
}
