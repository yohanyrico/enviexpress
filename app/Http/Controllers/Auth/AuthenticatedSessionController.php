<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Muestra el formulario de login.
     */
    public function create()
    {
        // Vista de login: resources/views/auth/login.blade.php
        return view('auth.login');
    }

    /**
     * Procesa el inicio de sesión.
     */
    public function store(Request $request)
    {
        // Validar las credenciales
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Intentar autenticación
        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('Estas credenciales no coinciden con nuestros registros.'),
            ]);
        }

        // Regenerar la sesión para evitar fixation
        $request->session()->regenerate();

        // ✅ Redirigir al dashboard
        return redirect()->intended('/dashboard');
    }

    /**
     * Cierra la sesión del usuario.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirigir a la página principal o login
        return redirect('/');
    }
}
