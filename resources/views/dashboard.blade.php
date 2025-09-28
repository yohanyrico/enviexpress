<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                <h1 class="text-3xl font-bold text-green-600 mb-4">¡Hola, {{ Auth::user()->name }}!</h1>
                <p class="text-gray-700 text-lg mb-6">
                    Bienvenido a tu panel de control de <strong>EnviExpress</strong>. Aquí puedes gestionar tus envíos, revisar el estado de tus entregas y acceder a soporte personalizado.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 bg-gray-100 rounded-lg shadow hover:shadow-lg transition">
                        <h2 class="text-xl font-semibold text-green-500 mb-2">📦 Mis Envíos</h2>
                        <p class="text-gray-600">Consulta el historial de tus entregas y el estado actual de tus paquetes.</p>
                        <a href="{{ route('envios.index') }}" class="text-green-600 font-medium mt-2 inline-block">Ver más →</a>
                    </div>

                    <div class="p-6 bg-gray-100 rounded-lg shadow hover:shadow-lg transition">
                        <h2 class="text-xl font-semibold text-green-500 mb-2">🚀 Nuevo Envío</h2>
                        <p class="text-gray-600">Solicita una nueva entrega rápida y segura en pocos pasos.</p>
                        <a href="{{ route('envios.create') }}" class="text-green-600 font-medium mt-2 inline-block">Solicitar →</a>
                    </div>

                    <div class="p-6 bg-gray-100 rounded-lg shadow hover:shadow-lg transition">
                        <h2 class="text-xl font-semibold text-green-500 mb-2">💬 Soporte</h2>
                        <p class="text-gray-600">¿Tienes dudas o necesitas ayuda? Nuestro equipo está listo para asistirte.</p>
                        <a href="{{ route('soporte') }}" class="text-green-600 font-medium mt-2 inline-block">Contactar →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
