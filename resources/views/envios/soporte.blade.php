<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Soporte') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="text-2xl font-bold text-green-600 mb-4">¿Necesitas ayuda?</h3>
                <p class="text-gray-700 mb-6">
                    Puedes contactarnos directamente por WhatsApp para recibir asistencia personalizada.
                </p>

                <a href="https://wa.me/573203460836?text=Hola%20EnviExpress,%20necesito%20ayuda%20con%20mi%20envío" 
                   target="_blank" 
                   class="bg-green-600 text-white px-6 py-3 rounded-full hover:bg-green-700 transition inline-block">
                    💬 Escribir por WhatsApp
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
