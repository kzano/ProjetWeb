<?php

namespace App\Http\Middleware;

use Closure;

class verifConnexion
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
        $resultat = auth()->attempt([
            'Login' => $request->input('login'),
            'password' =>    $request->input('mdp')
        ]);

        if(! $resultat)
        {
            $request->session()->put('log', 'erreurConnexion');
            return redirect("/boncoloc");            
        }

        return $next($request);
    }
}
