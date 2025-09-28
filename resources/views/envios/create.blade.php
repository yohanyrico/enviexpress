<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base font-medium text-gray-700">Registrar Pedido</h2>
    </x-slot>

    <div class="p-4 max-w-5xl mx-auto bg-white rounded shadow">
        <form action="{{ route('envios.store') }}" method="POST">
            @csrf

            <table class="min-w-full text-xs border border-gray-300 rounded">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-2 py-1 border">Guía</th>
                        <th class="px-2 py-1 border">Tipo</th>
                        <th class="px-2 py-1 border">Descripción</th>
                        <th class="px-2 py-1 border">Instrucciones</th>
                        <th class="px-2 py-1 border">Fecha</th>
                        <th class="px-2 py-1 border">Peso (kg)</th>
                        <th class="px-2 py-1 border">Estado</th>
                        <th class="px-2 py-1 border">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-2 py-1 border">
                            <input type="number" name="id_guia" class="w-full border px-2 py-1 rounded">
                        </td>
                        <td class="px-2 py-1 border">
                            <input type="text" name="tipo_pedido" class="w-full border px-2 py-1 rounded" required>
                        </td>
                        <td class="px-2 py-1 border">
                            <input type="text" name="descripcion_pedido" class="w-full border px-2 py-1 rounded">
                        </td>
                        <td class="px-2 py-1 border">
                            <input type="text" name="instrucciones_especiales" class="w-full border px-2 py-1 rounded">
                        </td>
                        <td class="px-2 py-1 border">
                            <input type="date" name="fecha_programada" class="w-full border px-2 py-1 rounded">
                        </td>
                        <td class="px-2 py-1 border">
                            <input type="number" step="0.01" name="peso_kg" class="w-full border px-2 py-1 rounded">
                        </td>
                        <td class="px-2 py-1 border">
                            <select name="estado_pedido" class="w-full border px-2 py-1 rounded" required>
                                <option value="">--</option>
                                <option value="pendiente">Pendiente</option>
                                <option value="en_proceso">En proceso</option>
                                <option value="entregado">Entregado</option>
                            </select>
                        </td>
                        <td class="px-2 py-1 border text-center">
                            <button type="submit" class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">
                                Guardar
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</x-app-layout>
