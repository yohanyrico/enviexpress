<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Gestión de Pedidos</h2>
    </x-slot>

    <div class="p-6">
        <div class="flex justify-between items-center mb-4">
            <a href="{{ route('envios.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                + Nuevo Pedido
            </a>

            <input type="text" placeholder="Buscar..." class="border px-3 py-1 rounded w-1/3">
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded text-sm">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-3 py-2 border">Tipo</th>
                        <th class="px-3 py-2 border">Fecha</th>
                        <th class="px-3 py-2 border">Peso (kg)</th>
                        <th class="px-3 py-2 border">Estado</th>
                        <th class="px-3 py-2 border">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pedidos as $pedido)
                        <tr class="border-t">
                            <td class="px-3 py-2">{{ $pedido->tipo_pedido }}</td>
                            <td class="px-3 py-2">{{ optional($pedido->fecha_programada)->format('d/m/Y') }}</td>
                            <td class="px-3 py-2">{{ number_format($pedido->peso_kg, 2) }}</td>
                            <td class="px-3 py-2">{{ ucfirst($pedido->estado_pedido) }}</td>
                            <td class="px-3 py-2 flex gap-2">
                                <a href="{{ route('envios.edit', $pedido) }}" class="text-blue-600 hover:underline">Editar</a>
                                <form action="{{ route('envios.destroy', $pedido) }}" method="POST" onsubmit="return confirm('¿Eliminar este pedido?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-3 py-4 text-center text-gray-500">No hay pedidos registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $pedidos->links() }}
        </div>
    </div>
</x-app-layout>
