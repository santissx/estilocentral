<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
           // Obtén el rol del usuario autenticado
     // Verifica el rol del usuario autenticado
     $user = Auth::user();

     // Redirigir según el rol del usuario
     if ($user->id_rol == 2) {
         // Si es administrador (id_rol == 2), redirige al dashboard de admin
         return redirect()->route('admin');
     } else {
         // Si es un usuario común (id_rol == 1), redirige al inicio
         return redirect()->route('inicio');
     }
 }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
{
    Auth::guard('web')->logout();

    // Opcional: Invalida la sesión del usuario
    $request->session()->invalidate();

    // Regenera el token de la sesión
    $request->session()->regenerateToken();

    // Redirige a la ruta despues de cerrar sesión
    return redirect('/login'); 
}
}

