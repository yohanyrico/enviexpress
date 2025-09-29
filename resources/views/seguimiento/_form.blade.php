<div class="p-6 bg-white rounded shadow border border-gray-200">
    @php
        $val = fn($key, $default = '') => old($key, isset($seguimiento) ? ($seguimiento->{$key} ?? $default) : $default);
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label for="fecha_evento" class="block text-sm font-medium text-gray-700">Fecha del Evento</label>
            <input type="datetime-local" name="fecha_evento"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                value="{{ $val('fecha_evento', isset($seguimiento->fecha_evento) ? \Carbon\Carbon::parse($seguimiento->fecha_evento)->format('Y-m-d\TH:i') : '') }}">
        </div>

        <div>
            <label for="ubicacion_actual" class="block text-sm font-medium text-gray-700">Ubicación Actual</label>
            <input type="text" name="ubicacion_actual"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                value="{{ $val('ubicacion_actual') }}">
        </div>

        <div>
            <label for="estado_evento" class="block text-sm font-medium text-gray-700">Estado del Evento</label>
            <input type="text" name="estado_evento"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                value="{{ $val('estado_evento') }}">
        </div>

        <div>
            <label for="id_empleado_responsable" class="block text-sm font-medium text-gray-700">Empleado Responsable</label>
            <select name="id_empleado_responsable"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @foreach($empleados as $empleado)
                    <option value="{{ $empleado->id_empleado }}"
                        {{ $val('id_empleado_responsable') == $empleado->id_empleado ? 'selected' : '' }}>
                        {{ $empleado->codigo_empleado }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
