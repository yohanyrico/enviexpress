<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Nuevo Evento de Seguimiento</h2>
    </x-slot>

    <form action="{{ route('seguimientos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('seguimiento._form')
        
        <div class="mt-6 px-6">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Guardar Evento
            </button>
        </div>
    </form>
</x-app-layout>
