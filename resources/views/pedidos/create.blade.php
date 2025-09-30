<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Nuevo Pedido</h2>
    </x-slot>

    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        
        @include('pedidos._form',
        ['guias' => $guias])

        <div class="mt-6 px-6">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Guardar Pedido
            </button>
        </div>
    </form>
</x-app-layout>
