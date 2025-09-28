<?php

namespace App\Http\Controllers\Envios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;
use Illuminate\Support\Carbon;

class EnvioController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::orderBy('fecha_programada', 'desc')->paginate(10); // ✅
        return view('envios.index', compact('pedidos'));
    }

    public function create()
    {
        return view('envios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo_pedido' => 'required|string|max:255',
            'descripcion_pedido' => 'nullable|string',
            'instrucciones_especiales' => 'nullable|string',
            'fecha_programada' => 'nullable|date',
            'peso_kg' => 'nullable|numeric|min:0',
            'estado_pedido' => 'required|string',
        ]);

        Pedido::create($request->all());

        return redirect()->route('envios.index')->with('success', 'Pedido creado exitosamente.');
    }

    public function edit(Pedido $pedido)
    {
        return view('envios.edit', compact('pedido'));
    }

    public function update(Request $request, Pedido $pedido)
    {
        $request->validate([
            'tipo_pedido' => 'required|string|max:255',
            'descripcion_pedido' => 'nullable|string',
            'instrucciones_especiales' => 'nullable|string',
            'fecha_programada' => 'nullable|date',
            'peso_kg' => 'nullable|numeric|min:0',
            'estado_pedido' => 'required|string',
        ]);

        $pedido->update($request->all());

        return redirect()->route('envios.index')->with('success', 'Pedido actualizado.');
    }

    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('envios.index')->with('success', 'Pedido eliminado.');
    }
}
