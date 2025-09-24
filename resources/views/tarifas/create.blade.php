<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Nueva Tarifa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('tarifas.store') }}" method="POST">
                    @csrf

                    <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                        <div class="flex-1 form-group">
                            <label for="nom_tarifa" class="block text-gray-700">Nombre Tarifa</label>
                            <input type="text" id="nom_tarifa" name="nombre_tarifa" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="flex-1 form-group">
                            <label for="ubi_origen" class="block text-gray-700">Ubicación Origen</label>
                            <input type="text" id="ubi_origen" name="ubicacion_origen" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="flex-1 form-group">
                            <label for="ubi_destino" class="block text-gray-700">Ubicación Destino</label>
                            <input type="text" id="ubi_destino" name="ubicacion_destino" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                        <div class="flex-1 form-group">
                            <label for="tip_servicio" class="block text-gray-700">Tipo Servicio</label>
                            <input type="text" id="tip_servicio" name="tipo_servicio" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="flex-1 form-group">
                            <label for="peso_min" class="block text-gray-700">Peso Mínimo</label>
                            <input type="number" id="peso_min" name="peso_minimo_kg" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="flex-1 form-group">
                            <label for="peso_max" class="block text-gray-700">Peso Máximo</label>
                            <input type="number" id="peso_max" name="peso_maximo_kg" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                        <div class="flex-1 form-group">
                            <label for="tarifa_base" class="block text-gray-700">Tarifa Base</label>
                            <input type="number" id="tarifa_base" name="tarifa_base" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="flex-1 form-group">
                            <label for="tarifa_adicional" class="block text-gray-700">Tarifa Adicional</label>
                            <input type="number" id="tarifa_adicional" name="tarifa_adicional_kg" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="flex-1 form-group">
                            <label for="tiempo_entrega" class="block text-gray-700">Tiempo de Entrega (horas)</label>
                            <input type="number" id="tiempo_entrega" name="tiempo_entrega_horas" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row md:space-x-4 mb-6">
                        <div class="flex-1 form-group">
                            <label for="vigencia_desde" class="block text-gray-700">Vigencia Desde</label>
                            <input type="datetime-local" id="vigencia_desde" name="vigencia_desde" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="flex-1 form-group">
                            <label for="vigencia_hasta" class="block text-gray-700">Vigencia Hasta</label>
                            <input type="datetime-local" id="vigencia_hasta" name="vigencia_hasta" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-end">
                        <button type="submit" class="btn btn-primary px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Guardar Tarifa
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>