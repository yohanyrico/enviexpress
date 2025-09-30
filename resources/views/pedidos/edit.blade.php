<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Editar Pedido</h2>
    </x-slot>

    <form action="{{ route('pedidos.update', $pedido) }}" method="POST">
        @csrf
        @method('PUT')

        @include('pedidos._form', ['pedido' => $pedido])

        <div class="mt-6 px-6">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Actualizar Pedido
            </button>
        </div>
    </form>
</x-app-layout>
