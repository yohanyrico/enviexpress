    <x-app-layout>
        <x-slot name="header">
            <h2 class="text-xl font-semibold text-gray-800">Guías</h2>
        </x-slot>

        <div class="p-6">
            {{-- Acción y búsqueda --}}
            <div class="flex justify-between items-center mb-4">
                <a href="{{ route('guias.create') }}" 
                class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    + Nueva Guía
                </a>

@if(session('ok'))
    <div class="mb-4 px-4 py-2 bg-green-100 border border-green-400 text-green-700 rounded shadow">
        {{ session('ok') }}
    </div>
@endif

                <input id="searchGuias" 
                    type="text" 
                    placeholder="Buscar..." 
                    class="border px-3 py-1 rounded w-1/3">
            </div>

            {{-- Tabla responsiva --}}
            <div class="overflow-x-auto">
                <table id="guias" class="min-w-full bg-white border rounded text-sm">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-3 py-2 border">Número Guía</th>
                            <th class="px-3 py-2 border">ID Guía</th>
                            <th class="px-3 py-2 border">Tipo Servicio</th>
                            <th class="px-3 py-2 border">Remitente</th>
                            <th class="px-3 py-2 border">Destinatario</th>
                            <th class="px-3 py-2 border">Peso (kg)</th>
                            <th class="px-3 py-2 border">Valor Declarado</th>
                            <th class="px-3 py-2 border">Fecha Creación</th>
                            <th class="px-3 py-2 border">Estado</th>
                            <th class="px-3 py-2 border">Observaciones</th>
                            <th class="px-3 py-2 border">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($guias as $guia)
                            <tr class="border-t">
                                <td class="px-3 py-2">{{ $guia->numero_guia }}</td>
                                <td class="px-3 py-2">{{ $guia->id_guia }}</td>
                                <td class="px-3 py-2">{{ $guia->tipo_servicio }}</td>
                                <td class="px-3 py-2">
                                    {{ $guia->remitente->nombres ?? '-' }}
                                    {{ $guia->remitente->apellidos ?? '' }}
                                </td>
                                <td class="px-3 py-2">
                                    {{ $guia->destinatario->nombres ?? '-' }}
                                    {{ $guia->destinatario->apellidos ?? '' }}
                                </td>
                                <td class="px-3 py-2">{{ number_format($guia->peso_total_kg, 2) }}</td>
                                <td class="px-3 py-2">{{ number_format($guia->valor_declarado, 2) }}</td>
                                <td class="px-3 py-2">{{ \Carbon\Carbon::parse($guia->fecha_creacion)->format('d/m/Y H:i') }}</td>
                                <td class="px-3 py-2">{{ ucfirst($guia->estado_actual) }}</td>
                                <td class="px-3 py-2">{{ $guia->observaciones }}</td>
                                <td class="px-3 py-2 flex gap-2">
                                    <a href="{{ route('guias.edit', $guia) }}" 
                                    class="text-blue-600 hover:underline">
                                        Editar
                                    </a>
                                    <form action="{{ route('guias.destroy', $guia) }}" 
                                        method="POST" 
                                        onsubmit="return confirm('¿Eliminar esta guía?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- DataTables y dependencias --}}
        <link rel="stylesheet" 
            href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
        <link rel="stylesheet" 
            href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

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
                var table = $('#guias').DataTable({
                    pageLength: 20,
                    dom: 'Brtip',
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
                    },
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                });

                // Conectar el input de búsqueda externo
                $('#searchGuias').on('keyup', function() {
                    table.search(this.value).draw();
                });
            });
        </script>
    </x-app-layout>
