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

                {{-- 🔗 Accesos principales --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 bg-gray-100 rounded-lg shadow hover:shadow-lg transition">
                        <h2 class="text-xl font-semibold text-green-500 mb-2">📦 Mis Pedidos</h2>
                        <p class="text-gray-600">Consulta el historial de tus entregas y el estado actual de tus paquetes.</p>
                        <a href="{{ route('pedidos.index') }}" class="text-green-600 font-medium mt-2 inline-block">Ver más →</a>
                    </div>

                    <div class="p-6 bg-gray-100 rounded-lg shadow hover:shadow-lg transition">
                        <h2 class="text-xl font-semibold text-green-500 mb-2">🚀 Nuevo Pedido</h2>
                        <p class="text-gray-600">Solicita una nueva entrega rápida y segura en pocos pasos.</p>
                        <a href="{{ route('pedidos.create') }}" class="text-green-600 font-medium mt-2 inline-block">Solicitar →</a>
                    </div>

                    <div class="p-6 bg-gray-100 rounded-lg shadow hover:shadow-lg transition">
                        <h2 class="text-xl font-semibold text-green-500 mb-2">💬 Soporte</h2>
                        <p class="text-gray-600">¿Tienes dudas o necesitas ayuda? Nuestro equipo está listo para asistirte.</p>
                        <a href="{{ route('soporte') }}" class="text-green-600 font-medium mt-2 inline-block">Contactar →</a>
                    </div>
                </div>

                {{-- 📊 Sección de estadísticas rápidas --}}
                <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">
                    📊 Sección de estadísticas rápidas
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                    <div class="p-6 bg-gray-100 rounded-lg shadow text-center">
                        <h3 class="text-2xl font-bold text-green-600">12</h3>
                        <p class="text-gray-600">Envíos activos</p>
                    </div>
                    <div class="p-6 bg-green-100 rounded-lg shadow text-center">
                        <h3 class="text-2xl font-bold text-blue-600">34</h3>
                        <p class="text-gray-600">Entregados</p>
                    </div>
                    <div class="p-6 bg-red-100 rounded-lg shadow text-center">
                        <h3 class="text-2xl font-bold text-yellow-600">3</h3>
                        <p class="text-gray-600">Pendientes</p>
                    </div>
                </div>

                {{-- 🔔 Notificaciones recientes --}}
                <div class="mt-8 p-6 bg-gray-50 rounded-lg shadow">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">🔔 Notificaciones</h2>
                    <ul class="list-disc pl-6 text-gray-700">
                        <li>Tu envío #G124 fue entregado con éxito.</li>
                        <li>Nuevo mensaje de soporte disponible.</li>
                        <li>Promoción: 20% de descuento en envíos nacionales.</li>
                    </ul>
                </div>

                {{-- ⚙️ Configuración rápida --}}
                <div class="mt-8 p-6 bg-gray-50 rounded-lg shadow">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">⚙️ Configuración</h2>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
