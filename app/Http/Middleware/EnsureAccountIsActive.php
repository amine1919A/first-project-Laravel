<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAccountIsActive
{
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifie si l'utilisateur est connecté et inactif
        if (auth()->check() && !auth()->user()->is_active) {
            return redirect('/')
                ->with('error', 'Votre compte est désactivé.');
        }

        return $next($request);
    }
}