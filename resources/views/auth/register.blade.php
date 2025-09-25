<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased min-h-screen bg-cover bg-center flex items-center justify-center"
      style="background-image: url('{{ asset('images/fondo-welcome.png') }}');">
  <div class="bg-white rounded-xl shadow-lg w-[380px] min-h-[600px] flex flex-col p-6">

    <!-- Logo -->
    <div class="flex justify-center mb-4">
      <img src="{{ asset('images/envi.png') }}" alt="Logo" class="w-24 h-auto">
    </div>

    <!-- Título -->
    <h1 class="text-black-600 text-xl font-semibold text-center mb-6">
      Formulario de Registro
    </h1>

    {{-- Errores de validación --}}
    @if ($errors->any())
      <div class="mb-4 text-red-600 text-sm">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- Nombre (Laravel requiere "name") --}}
        <div class="mb-4">
          <label for="name" class="block text-base font-medium text-gray-700 mb-1">Nombre</label>
          <input id="name" name="name" type="text" value="{{ old('name') }}" required
                 class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
        </div>

        {{-- Apellido --}}
        <div class="mb-4">
          <label for="apellido" class="block text-base font-medium text-gray-700 mb-1">Apellido</label>
          <input id="apellido" name="apellido" type="text" value="{{ old('apellido') }}" required
                 class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
        </div>

        {{-- Teléfono --}}
        <div class="mb-4">
          <label for="telefono" class="block text-base font-medium text-gray-700 mb-1">Teléfono</label>
          <input id="telefono" name="telefono" type="tel" value="{{ old('telefono') }}" required
                 class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
        </div>

        {{-- Empresa --}}
        <div class="mb-4">
          <label for="empresa" class="block text-base font-medium text-gray-700 mb-1">Nombre de empresa</label>
          <input id="empresa" name="empresa" type="text" value="{{ old('empresa') }}" required
                 class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
        </div>

        {{-- Dirección --}}
        <div class="mb-4">
          <label for="direccion" class="block text-base font-medium text-gray-700 mb-1">Dirección</label>
          <input id="direccion" name="direccion" type="text" value="{{ old('direccion') }}" required
                 class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
        </div>

        {{-- Correo --}}
        <div class="mb-4">
          <label for="email" class="block text-base font-medium text-gray-700 mb-1">Correo electrónico</label>
          <input id="email" name="email" type="email" value="{{ old('email') }}" required
                 class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
        </div>

        {{-- Contraseña --}}
        <div class="mb-4">
          <label for="password" class="block text-base font-medium text-gray-700 mb-1">Contraseña</label>
          <input id="password" name="password" type="password" required
                 class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
        </div>

        {{-- Confirmación de contraseña --}}
        <div class="mb-4">
          <label for="password_confirmation" class="block text-base font-medium text-gray-700 mb-1">Confirmar contraseña</label>
          <input id="password_confirmation" name="password_confirmation" type="password" required
                 class="w-full border-2 border-green-500 focus:border-green-600 focus:ring-green-600 rounded-md p-2">
        </div>

        {{-- Botón de envío --}}
        <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-md">
          Registrarse
        </button>
    </form>
 
</div>
</body>
</html>
