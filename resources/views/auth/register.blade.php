<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <!-- ✅ Tailwind desde CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased min-h-screen bg-cover bg-center flex items-center justify-center"
      style="background-image: url('images/fondo-welcome.png');">

  <!-- Contenedor principal -->
  <div class="bg-white rounded-xl shadow-lg w-[380px] min-h-[600px] flex flex-col p-6">

    <!-- Logo -->
    <div class="flex justify-center mb-4">
      <img src="images/envi.png" alt="Logo" class="w-24 h-auto">
    </div>

    <!-- Título -->
    <h1 class="text-green-600 text-xl font-semibold text-center mb-6">
      Formulario de Registro
    </h1>

    <!-- Errores de validación (opcional) -->
    <div id="errors" class="mb-4 text-red-600 text-sm hidden">
      <!-- Aquí puedes mostrar errores con JS -->
    </div>

    <!-- Formulario -->
    <form method="POST" action="/registro">

      <!-- Nombre -->
      <div class="mb-4">
        <label for="nombre" class="block text-base font-medium text-gray-700 mb-1">
          Nombre
        </label>
        <input id="nombre" name="nombre" type="text" required
               class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
      </div>

      <!-- Apellido -->
      <div class="mb-4">
        <label for="apellido" class="block text-base font-medium text-gray-700 mb-1">
          Apellido
        </label>
        <input id="apellido" name="apellido" type="text" required
               class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
      </div>

      <!-- Teléfono -->
      <div class="mb-4">
        <label for="telefono" class="block text-base font-medium text-gray-700 mb-1">
          Teléfono
        </label>
        <input id="telefono" name="telefono" type="tel" required
               class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
      </div>

      <!-- Nombre de empresa -->
      <div class="mb-4">
        <label for="empresa" class="block text-base font-medium text-gray-700 mb-1">
          Nombre de empresa
        </label>
        <input id="empresa" name="empresa" type="text" required
               class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
      </div>

      <!-- Dirección -->
      <div class="mb-4">
        <label for="direccion" class="block text-base font-medium text-gray-700 mb-1">
          Dirección
        </label>
        <input id="direccion" name="direccion" type="text" required
               class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
      </div>

      <!-- Correo electrónico -->
      <div class="mb-4">
        <label for="email" class="block text-base font-medium text-gray-700 mb-1">
          Correo electrónico
        </label>
        <input id="email" name="email" type="email" required
               class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
      </div>

      <!-- Contraseña -->
      <div class="mb-4">
        <label for="password" class="block text-base font-medium text-gray-700 mb-1">
          Contraseña
        </label>
        <input id="password" name="password" type="password" required
               class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
      </div>

      <!-- Recuérdame -->
      <div class="flex items-center mb-4">
        <input id="remember" name="remember" type="checkbox"
               class="h-4 w-4 text-green-600 border-gray-300 rounded">
        <label for="remember" class="ml-2 text-sm text-gray-700">
          Recuérdame
        </label>
      </div>

      <!-- Enlace para recuperar contraseña -->
      <a href="/recuperar-contraseña"
         class="text-green-600 hover:underline text-sm block mb-4">
         ¿Olvidaste tu contraseña?
      </a>

      <!-- Botón de envío -->
      <button type="submit"
              class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 rounded-md">
        Registrarse
      </button>
    </form>

  </div>

</body>
</html>
