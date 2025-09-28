<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Envío') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <form action="{{ route('envios.update', $pedido) }}" method="POST">
                    @csrf
                    @method('PUT')


                    <div class="mb-4">
                        <label for="destinatario" class="block text-gray-700 font-medium">Destinatario</label>
                        <input type="text" name="destinatario" id="destinatario" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="direccion" class="block text-gray-700 font-medium">Dirección de entrega</label>
                        <input type="text" name="direccion" id="direccion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="descripcion" class="block text-gray-700 font-medium">Descripción del paquete</label>
                        <textarea name="descripcion" id="descripcion" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>

                    <div class="mb-6">
                        <label for="fecha_entrega" class="block text-gray-700 font-medium">Fecha de entrega</label>
                        <input type="date" name="fecha_entrega" id="fecha_entrega" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                        Confirmar Envío
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
