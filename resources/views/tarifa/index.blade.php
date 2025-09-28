<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Gestión de Tarifas</h2>
    </x-slot>

    <div class="p-6">
        {{-- Mensaje de éxito --}}
        @if(session('ok'))
            <div class="mb-4 px-4 py-2 bg-green-100 border border-green-400 text-green-700 rounded shadow">
                {{ session('ok') }}
            </div>
        @endif

        {{-- Acción y búsqueda --}}
        <div class="flex justify-between items-center mb-4">
            <a href="{{ route('tarifas.create') }}" 
               class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                + Nueva Tarifa
            </a>

            <input id="searchTarifas" 
                   type="text" 
                   placeholder="Buscar..." 
                   class="border px-3 py-1 rounded w-1/3">
        </div>

        {{-- Tabla responsiva --}}
        <div class="overflow-x-auto">
            <table id="tarifa" class="min-w-full bg-white border rounded text-sm">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-3 py-2 border">Nombre Tarifa</th>
                        <th class="px-3 py-2 border">Ubi Origen</th>
                        <th class="px-3 py-2 border">Ubi Destino</th>
                        <th class="px-3 py-2 border">Tipo Servicio</th>
                        <th class="px-3 py-2 border">Peso Min</th>
                        <th class="px-3 py-2 border">Peso Max</th>
                        <th class="px-3 py-2 border">Tarifa Base</th>
                        <th class="px-3 py-2 border">Tarifa Adicional</th>
                        <th class="px-3 py-2 border">Tiempo Entrega</th>
                        <th class="px-3 py-2 border">Vigencia Desde</th>
                        <th class="px-3 py-2 border">Vigencia Hasta</th>
                        <th class="px-3 py-2 border">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tarifas as $tar)
                        <tr class="border-t">
                            <td class="px-3 py-2">{{ $tar->nombre_tarifa }}</td>
                            <td class="px-3 py-2">{{ $tar->origen->ciudad ?? '-' }}</td>
                            <td class="px-3 py-2">{{ $tar->destino->ciudad ?? '-' }}</td>
                            <td class="px-3 py-2">{{ $tar->tipo_servicio }}</td>
                            <td class="px-3 py-2">{{ $tar->peso_minimo_kg }}</td>
                            <td class="px-3 py-2">{{ $tar->peso_maximo_kg }}</td>
                            <td class="px-3 py-2">{{ $tar->tarifa_base }}</td>
                            <td class="px-3 py-2">{{ $tar->tarifa_adicional_kg }}</td>
                            <td class="px-3 py-2">{{ $tar->tiempo_entrega_horas }}</td>
                            <td class="px-3 py-2">{{ $tar->vigencia_desde }}</td>
                            <td class="px-3 py-2">{{ $tar->vigencia_hasta }}</td>
                            <td class="px-3 py-2 flex gap-2">
                                <a href="{{ route('tarifas.edit', $tar) }}" class="text-blue-600 hover:underline">Editar</a>
                                <form action="{{ route('tarifas.destroy', $tar) }}" method="POST" onsubmit="return confirm('¿Eliminar esta tarifa?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12" class="px-3 py-4 text-center text-gray-500">No hay tarifas registradas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- DataTables y dependencias --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#tarifa').DataTable({
                pageLength: 20,
                dom: 'Bfrtip',
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
                },
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });

            // Conectar el input de búsqueda externo
            $('#searchTarifas').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>
</x-app-layout>
