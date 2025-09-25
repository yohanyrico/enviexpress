<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
</head>
<body>
    <div class="about-us-container">
    <h2>Sobre Nosotros</h2>
    <p>Somos una empresa especializada en servicios de mensajería y paquetería en Bogotá. Más de 10 años de experiencia nos respaldan en el mercado de entregas rápidas y seguras.</p>

    <div class="image-placeholder">
        <h4>Haz clic para agregar imagen de tu equipo</h4>
        <p>Recomendado: 1000x500px</p>
    </div>

    <div class="flex flex-col lg:flex-row gap-4">
    <a
        href="{{ route('login') }}"
        class="flex-1 flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-gray/[0.05] transition duration-300 text-black focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10"
    >
        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
            <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#3eff20" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <rect x="1" y="7" width="13" height="9" rx="1" ry="1"/>
                <path d="M14 10h4l3 4v2a0 0 0 0 1 0 0H14v-6z"/>
                <path d="M1 18h2"/>
                <circle cx="5.5" cy="18" r="2" fill="#000000" stroke="#000000"/>
                <circle cx="17.5" cy="18" r="2" fill="#000000" stroke="#000000"/>
            </svg>
        </div>
        <div class="pt-3 sm:pt-5">
            <h2 class="text-xl font-semibold text-black">Solicitar envíos</h2>
            <p class="mt-4 text-sm/relaxed">
                Realiza el envío de tus paquetes en segundos. Solo ingresa los datos de origen y destino, elige el servicio que prefieras ¡y listo! Nuestro equipo recoge tu paquete en la puerta de tu casa u oficina.
            </p>
        </div>
    </a>

    
        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
            
        </div>
        <div class="pt-3 sm:pt-5">
            <h2 class="text-xl font-semibold text-black">Rastrea tu paquete</h2>
            <p class="mt-4 text-sm/relaxed">
                Conoce el estado de tu envío en tiempo real. Ingresa el número de guía para saber dónde se encuentra tu paquete y el tiempo estimado de entrega.
            </p>
        </div>
    </a>

    
        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
            <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#202bff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.63A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg>
        </div>
        <div class="pt-3 sm:pt-5">
            <h2 class="text-xl font-semibold text-black">Contacta con nosotros</h2>
            <p class="mt-4 text-sm/relaxed">
                ¿Tienes preguntas o necesitas ayuda? Nuestro equipo de soporte está disponible 24/7 para resolver cualquier duda que tengas sobre nuestros servicios.
            </p>
        </div>
    </a>
</div>
</div>
</body>
</html>