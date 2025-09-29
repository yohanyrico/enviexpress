<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Editar Evento</h2>
    </x-slot>

    <form action="{{ route('seguimientos.update', $seguimiento) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('seguimiento._form', 
        ['seguimiento' => $seguimiento
        ])
        
        <div class="mt-6 px-6">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Actualizar Evento
            </button>
        </div>
    </form>
</x-app-layout>
