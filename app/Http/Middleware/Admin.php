<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        $user_actual = \Auth::user();
        if ($user_actual->dependencia == 'Administrador') {
            return redirect('home');
        }

        return $next($request);
    }
}
