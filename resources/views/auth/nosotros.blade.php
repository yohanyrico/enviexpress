<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Servicios</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Estilo para simular el fondo verde oscuro de la imagen */
        body {
            background-color: #0d3618; /* Verde oscuro */
            color: #ffffff;
            font-family: ui-sans-serif, system-ui, sans-serif;
        }
    </style>
</head>
<body>

    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center mb-10">Sobre Nosotros</h2>
        <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50">

    {{-- =================================================================== --}}
    {{-- BLOQUE PRINCIPAL: INTRODUCCIÓN Y EXPERIENCIA --}}
    {{-- =================================================================== --}}
    <div class="max-w-7xl mx-auto text-center mb-12">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-green-700 mb-4">
            Más de una Década de Confianza en Mensajería y Logística en Bogotá
        </h2>
        <p class="text-lg text-gray-600 max-w-4xl mx-auto">
            En el dinámico corazón de Bogotá, nos hemos consolidado como el ALIADO LOGISTICO DE CONFINZA para empresas y particulares de la mensajería y la paquetería, no solo entregamos paquetes y documentos, garantizamos tranquilidad. Nuestro historial de servicio impecable y nuestra profunda comprensión de la geografía bogotana nos permiten ofrecer un nivel de ENTREGAS RAPIDAS Y SEGURAS que nos diferencia.
        </p>
    </div>

    <div class="max-w-5xl mx-auto mt-16 mb-12 text-center">
        <h3 class="text-2xl font-bold text-gray-900 mb-6 border-b-2 border-green-500 inline-block pb-1">
            Nuestro Compromiso: Rapidez, Seguridad y Tecnología
        </h3>
        <p class="text-gray-700">
            Nuestra misión es sencilla: optimizar sus tiempos y proteger sus envíos. Para cumplir con este compromiso, hemos estructurado nuestra oferta de servicios en tres pilares fundamentales:
        </p>
    </div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">

        
        <div class="bg-gray-50 rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 border-t-4 border-green-500">
            <div class="flex items-start mb-4">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                    <span class="text-xl" role="img" aria-label="Camión de reparto">⚡</span>
                </div>
                <h4 class="text-xl font-bold text-gray-900 pt-1">1. Mensajería Express: Velocidad que Transforma su Operación</h4>
            </div>
            <p class="text-gray-700 mt-4">
                Sabemos que en el mundo de los negocios, el tiempo es un activo invaluable. Por eso, nos especializamos en **Entregas Rápidas en menos de 2 horas en toda Bogotá**.
            </p>
            <ul class="list-disc list-inside mt-3 text-sm text-gray-600 space-y-1">
                <li>Implementamos **seguimiento en tiempo real (GPS)** para la ubicación exacta.</li>
                <li>Reciba **notificaciones instantáneas** sobre la recogida, el tránsito y la entrega.</li>
            </ul>
        </div>

        {{-- PILLAR 2: Paquetería Segura --}}
        <div class="bg-gray-50 rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 border-t-4 border-green-500">
            <div class="flex items-start mb-4">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                    <span class="text-xl" role="img" aria-label="Paquete">📑</span>
                </div>
                <h4 class="text-xl font-bold text-gray-900 pt-1">2. Paquetería Segura: Envíos con Garantía y Respaldo Total</h4>
            </div>
            <p class="text-gray-700 mt-4">
                Cuando se trata de documentos importantes o mercancía de valor, la seguridad es lo primero. Nuestro servicio de Paquetería Segura protege su inversión contra cualquier eventualidad.
            </p>
            <ul class="list-disc list-inside mt-3 text-sm text-gray-600 space-y-1">
                <li>Ofrecemos **garantía total y seguro incluido contra pérdidas**.</li>
                <li>Manejamos sus envíos sensibles con el **mayor cuidado y discreción**.</li>
            </ul>
        </div>

        {{-- PILLAR 3: Seguridad Garantizada --}}
        <div class="bg-gray-50 rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 border-t-4 border-green-500">
            <div class="flex items-start mb-4">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                    <span class="text-xl" role="img" aria-label="Candado de seguridad">🛰️</span>
                </div>
                <h4 class="text-xl font-bold text-gray-900 pt-1">3. Seguridad Garantizada: Trazabilidad y Confianza Digital</h4>
            </div>
            <p class="text-gray-700 mt-4">
                La tecnología es el motor de nuestra seguridad. Garantizamos un proceso de entrega 100% confiable y auditable, dándole el control total.
            </p>
            <ul class="list-disc list-inside mt-3 text-sm text-gray-600 space-y-1">
                <li>Incluye **Seguimiento GPS en tiempo real** y una **fotografía de entrega**.</li>
                <li>Finalizamos el proceso con una **firma digital** para una garantía 100% confiable.</li>
            </ul>
        </div>
    </div>

    <div class="max-w-7xl mx-auto text-center mt-12 pt-8 border-t border-gray-200">
        <p class="text-lg text-gray-600">
            Con más de una década siendo los líderes en logística exprés en Bogotá, estamos listos para ser el socio que su empresa necesita. Confíe en nuestra experiencia, nuestra flota y nuestra tecnología para llevar su paquetería y mensajería al siguiente nivel.
        </p>
        {{-- Botón de Ejemplo para Contacto --}}
                 <a href="{{ route('register') }}" 
           class="mt-12 inline-block bg-green-600 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:bg-green-700 transition duration-300">
            ¡Comience a Enviar Hoy!
        </a>
    </div>



        {{-- Contenedor principal de las 3 etiquetas --}}
        <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-6">

            {{-- === Etiqueta 1: Mensajería Express === --}}
            <div class="bg-white rounded-xl shadow-2xl p-6 w-full md:w-1/3 transition duration-300 hover:shadow-green-500/50">
                <div class="flex justify-start items-center mb-4">
                    {{-- Icono de la imagen (simulación con color rosa pálido de fondo) --}}
                    <div class="w-14 h-14 bg-red-50 rounded-full flex items-center justify-center mr-4">
                        <span class="text-3xl" role="img" aria-label="Mision">🎯</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Nuestra Misión</h3>
                </div>
                <p class="text-gray-600 text-base">
                   Proveer soluciones integrales de logística y mensajería de última milla, garantizando la optimización de los procesos de entrega y la seguridad total de los envíos. Nos comprometemos a ser el socio estratégico de nuestros clientes mediante la adopción de tecnología de vanguardia y el desarrollo continuo de nuestro capital humano, asegurando la máxima confiabilidad y superando consistentemente los estándares del servicio.
                </p>
            </div>

            {{-- === Etiqueta 2: Paquetería Segura === --}}
            <div class="bg-white rounded-xl shadow-2xl p-6 w-full md:w-1/3 transition duration-300 hover:shadow-green-500/50">
                <div class="flex justify-start items-center mb-4">
                    {{-- Icono de la imagen (simulación con color rosa pálido de fondo) --}}
                    <div class="w-14 h-14 bg-red-50 rounded-full flex items-center justify-center mr-4">
                        <span class="text-3xl" role="img" aria-label="Vision">🧭</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Nuestra Visión</h3>
                </div>
                <p class="text-gray-600 text-base">
                    Somos una empresa líder en soluciones de logística urbana y paquetería express en Bogotá, Nuestra experiencia no se mide solo en años, sino en entregas exitosas que han fortalecido la cadena de suministro de nuestros clientes. Operamos con un enfoque dual en la eficiencia operativa y la confianza del cliente, garantizando que cada envío refleje nuestro compromiso con la excelencia.
                </p>
            </div>

            {{-- === Etiqueta 3: Seguridad Garantizada === --}}
            <div class="bg-white rounded-xl shadow-2xl p-6 w-full md:w-1/3 transition duration-300 hover:shadow-green-500/50">
                <div class="flex justify-start items-center mb-4">
                    {{-- Icono de la imagen (simulación con color rosa pálido de fondo) --}}
                    <div class="w-14 h-14 bg-red-50 rounded-full flex items-center justify-center mr-4">
                        <span class="text-3xl" role="img" aria-label="valores">🛡️</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Nuestros Valores</h3>
                </div>
                <p class="text-gray-600 text-base">
                    La cultura de nuestra organización se cimienta en pilares estratégicos: la Confianza como base de toda relación comercial; la Agilidad impulsada por la Innovación tecnológica para garantizar la eficiencia; y la Excelencia en el Servicio al Cliente como el estándar que guía cada una de nuestras operaciones logísticas.
                </p>
            </div>

        </div>
    </div>
</section>
</body>
</html>