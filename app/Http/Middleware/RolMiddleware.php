<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            // Obtener el usuario autenticado
            $user = Auth::user();

            // Verificar el id_rol del usuario (puedes ajustar esta lógica según tu necesidad)
            if ($user->id_rol === 2) {
                return $next($request); // Usuario con rol 'admin' tiene acceso
            }
        }
        return redirect('error/403');
    }
}
