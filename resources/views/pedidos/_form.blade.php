<div class="p-6 bg-white rounded shadow border border-gray-200">
    @php
        $val = fn($key, $default = '') => old($key, isset($pedido) ? ($pedido->{$key} ?? $default) : $default);
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label for="fecha_programada" class="block text-sm font-medium text-gray-700">Fecha Programada</label>
            <input type="datetime-local" name="fecha_programada"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                value="{{ $val('fecha_programada', isset($pedido->fecha_programada) ? \Carbon\Carbon::parse($pedido->fecha_programada)->format('Y-m-d\TH:i') : '') }}">
        </div>


        <div>
            <label for="tipo_pedido" class="block text-sm font-medium text-gray-700">Tipo de Pedido</label>
            <input type="text" name="tipo_pedido"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                value="{{ $val('tipo_pedido') }}">
        </div>

        <div>
            <label for="peso_kg" class="block text-sm font-medium text-gray-700">Peso (kg)</label>
            <input type="number" step="0.01" name="peso_kg"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                value="{{ $val('peso_kg') }}">
        </div>

        <div>
            <label for="estado_pedido" class="block text-sm font-medium text-gray-700">Estado del Pedido</label>
            <input type="text" name="estado_pedido"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                value="{{ $val('estado_pedido') }}">
        </div>
    </div>

    <div class="mt-6">
        <label for="descripcion_pedido" class="block text-sm font-medium text-gray-700">Descripción</label>
        <textarea name="descripcion_pedido" rows="3"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ $val('descripcion_pedido') }}</textarea>
    </div>

    <div class="mt-6">
        <label for="instrucciones_especiales" class="block text-sm font-medium text-gray-700">Instrucciones Especiales</label>
        <textarea name="instrucciones_especiales" rows="3"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ $val('instrucciones_especiales') }}</textarea>
    </div>
</div>
