@php
    // Para edición, $tarifas llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($tarifa) ? ($tarifa->{$key} ?? $default) : $default);
@endphp

<!-- Nombre Tarifa -->
<div class="mb-4">
    <label for="nombre_tarifa" class="block text-sm font-medium text-gray-700">Nombre Tarifa*</label>
    <input type="text" id="nombre_tarifa" name="nombre_tarifa"
        value="{{ $val('nombre_tarifa') }}"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    @error('nombre_tarifa') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
</div>

<!-- Ubi Origen y Ubi Destino -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
    <!-- Origen -->
    <div>
        <label for="id_ubicacion_origen" class="block text-sm font-medium text-gray-700">Ubi Origen*</label>
        <select id="id_ubicacion_origen" name="id_ubicacion_origen"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                    focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            <option value="">-- Selecciona una ciudad --</option>
            @foreach($ubicaciones as $ubicacion)
                <option value="{{ $ubicacion->id_ubicacion }}"
                    {{ old('id_ubicacion_origen', $tarifa->id_ubicacion_origen ?? '') == $ubicacion->id_ubicacion ? 'selected' : '' }}>
                    {{ $ubicacion->ciudad }}
                </option>
            @endforeach
        </select>
        @error('id_ubicacion_origen')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Destino -->
    <div>
        <label for="id_ubicacion_destino" class="block text-sm font-medium text-gray-700">Ubi Destino*</label>
        <select id="id_ubicacion_destino" name="id_ubicacion_destino"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                    focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            <option value="">-- Selecciona una ciudad --</option>
            @foreach($ubicaciones as $ubicacion)
                <option value="{{ $ubicacion->id_ubicacion }}"
                    {{ old('id_ubicacion_destino', $tarifa->id_ubicacion_destino ?? '') == $ubicacion->id_ubicacion ? 'selected' : '' }}>
                    {{ $ubicacion->ciudad }}
                </option>
            @endforeach
        </select>
        @error('id_ubicacion_destino')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
</div>

<!-- Tipo servicio -->
<div class="mb-4">
    <label for="tipo_servicio" class="block text-sm font-medium text-gray-700">Tipo servicio*</label>
    <input type="text" id="tipo_servicio" name="tipo_servicio"
        value="{{ $val('tipo_servicio') }}"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    @error('tipo_servicio') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
</div>

<!-- Peso Min y Peso Max -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
    <div>
        <label for="peso_minimo_kg" class="block text-sm font-medium text-gray-700">Peso Min*</label>
        <input type="number" step="0.01" id="peso_minimo_kg" name="peso_minimo_kg"
            value="{{ $val('peso_minimo_kg') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('peso_minimo_kg') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="peso_maximo_kg" class="block text-sm font-medium text-gray-700">Peso Max*</label>
        <input type="number" step="0.01" id="peso_maximo_kg" name="peso_maximo_kg"
            value="{{ $val('peso_maximo_kg') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('peso_maximo_kg') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>
</div>

<!-- Tarifa Base y Tarifa Adicional -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
    <div>
        <label for="tarifa_base" class="block text-sm font-medium text-gray-700">Tarifa Base*</label>
        <input type="number" step="0.01" id="tarifa_base" name="tarifa_base"
            value="{{ $val('tarifa_base') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('tarifa_base') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="tarifa_adicional_kg" class="block text-sm font-medium text-gray-700">Tarifa Adicional*</label>
        <input type="number" step="0.01" id="tarifa_adicional_kg" name="tarifa_adicional_kg"
            value="{{ $val('tarifa_adicional_kg') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('tarifa_adicional_kg') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>
</div>

<!-- Tiempo de Entrega -->
<div class="mb-4">
    <label for="tiempo_entrega_horas" class="block text-sm font-medium text-gray-700">Tiempo Entrega (horas)*</label>
    <input type="number" id="tiempo_entrega_horas" name="tiempo_entrega_horas"
        value="{{ $val('tiempo_entrega_horas') }}"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    @error('tiempo_entrega_horas') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
</div>

<!-- Vigencia Desde y Hasta -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
    <div>
        <label for="vigencia_desde" class="block text-sm font-medium text-gray-700">Vigencia Desde*</label>
        <input type="date" id="vigencia_desde" name="vigencia_desde"
            value="{{ $val('vigencia_desde') ? \Carbon\Carbon::parse($val('vigencia_desde'))->format('Y-m-d') : '' }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('vigencia_desde') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="vigencia_hasta" class="block text-sm font-medium text-gray-700">Vigencia Hasta*</label>
        <input type="date" id="vigencia_hasta" name="vigencia_hasta"
            value="{{ $val('vigencia_hasta') ? \Carbon\Carbon::parse($val('vigencia_hasta'))->format('Y-m-d') : '' }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('vigencia_hasta') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>
</div>
