<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('tarifas.store') }}" method="POST">
                    @csrf
                    @include('tarifa._form', [  
                        'tarifa' => null,                 
                        'ubicaciones' => $ubicaciones
                        ])

                    <div class="mt-6">
                        <button type="submit"
                                class="px-6 py-2 bg-indigo-600 text-white font-medium rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Guardar
                        </button>
                        <a href="{{ route('tarifas.index') }}"
                            class="ml-3 px-6 py-2 bg-gray-300 text-gray-800 font-medium rounded-md shadow hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">
                            Cancelar
                        </a>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</x-app-layout>

