<div class="p-6 bg-white rounded shadow border border-gray-200">
    @php
        $val = fn($key, $default = '') => old($key, isset($guia) ? ($guia->{$key} ?? $default) : $default);
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label for="numero_guia" class="block text-sm font-medium text-gray-700">Número de Guía</label>
            <input type="text" name="numero_guia" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" value="{{ $val('numero_guia') }}">
        </div>



        <div>
            <label for="tipo_servicio" class="block text-sm font-medium text-gray-700">Tipo de Servicio</label>
            <input type="text" name="tipo_servicio" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" value="{{ $val('tipo_servicio') }}">
        </div>

        <div>
            <label for="id_remitente" class="block text-sm font-medium text-gray-700">Remitente</label>
            <select name="id_remitente" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @foreach($remitentes as $persona)
                    <option value="{{ $persona->id_persona }}" {{ $val('id_remitente') == $persona->id_persona ? 'selected' : '' }}>
                        {{ $persona->nombres }} {{ $persona->apellidos }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="id_destinatario" class="block text-sm font-medium text-gray-700">Destinatario</label>
            <select name="id_destinatario" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @foreach($destinatarios as $persona)
                    <option value="{{ $persona->id_persona }}" {{ $val('id_destinatario') == $persona->id_persona ? 'selected' : '' }}>
                        {{ $persona->nombres }} {{ $persona->apellidos }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="peso_total_kg" class="block text-sm font-medium text-gray-700">Peso Total (kg)</label>
            <input type="number" step="0.01" name="peso_total_kg" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" value="{{ $val('peso_total_kg') }}">
        </div>

        <div>
            <label for="valor_declarado" class="block text-sm font-medium text-gray-700">Valor Declarado</label>
            <input type="number" step="0.01" name="valor_declarado" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" value="{{ $val('valor_declarado') }}">
        </div>

        <div>
            <label for="fecha_creacion" class="block text-sm font-medium text-gray-700">Fecha de Creación</label>
            <input type="datetime-local" name="fecha_creacion" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                value="{{ $val('fecha_creacion', isset($guia->fecha_creacion) ? \Carbon\Carbon::parse($guia->fecha_creacion)->format('Y-m-d\TH:i') : '') }}">
        </div>

        <div>
            <label for="estado_actual" class="block text-sm font-medium text-gray-700">Estado Actual</label>
            <input type="text" name="estado_actual" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" value="{{ $val('estado_actual') }}">
        </div>
    </div>

    <div class="mt-6">
        <label for="observaciones" class="block text-sm font-medium text-gray-700">Observaciones</label>
        <textarea name="observaciones" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ $val('observaciones') }}</textarea>
    </div>
</div>
