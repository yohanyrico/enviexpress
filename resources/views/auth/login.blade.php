<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <!-- ✅ Tailwind desde CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased min-h-screen bg-cover bg-center flex items-center justify-center"
      style="background-image: url('images/fondo-welcome.png');">

  <!-- Contenedor principal -->
  <div class="bg-white rounded-xl shadow-lg w-[380px] min-h-[460px] flex flex-col p-6">

   <div class="flex justify-center mb-4">
      <img src="images/envi.png" alt="Logo" class="w-24 h-auto">
    </div>

    <!-- Título -->
    <h1 class="text-green-600 text-xl font-semibold text-center mb-6">
      Iniciar sesión
    </h1>

    <!-- Errores de validación (opcional) -->
    <div id="errors" class="mb-4 text-red-600 text-sm hidden">
      <!-- Aquí puedes mostrar errores si usas JS -->
    </div>

    <!-- Formulario -->
    <form method="POST" action="/login">
      @csrf
      <div class="mb-4">
        <label for="email" class="block text-base font-medium text-gray-700 mb-1">
          Correo electrónico
        </label>
        <input id="email" name="email" type="email" required
               class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
      </div>

      <div class="mb-4">
        <label for="password" class="block text-base font-medium text-gray-700 mb-1">
          Contraseña
        </label>
        <input id="password" name="password" type="password" required
               class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
      </div>

      <div class="flex items-center mb-4">
        <input id="remember" name="remember" type="checkbox"
               class="h-4 w-4 text-green-600 border-gray-300 rounded">
        <label for="remember" class="ml-2 text-sm text-gray-700">
          Recuérdame
        </label>
      </div>

      <a href="/password-reset"
         class="text-green-600 hover:underline text-sm block mb-4">
         ¿Olvidaste tu contraseña?
      </a>

      <button type="submit"
              class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 rounded-md">
        Entrar
      </button>
    </form>

  </div>

</body>
</html>
