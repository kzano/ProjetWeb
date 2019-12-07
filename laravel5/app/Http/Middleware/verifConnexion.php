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
        $request->validate([
            'login' => ['required'],
            'mdp' => ['required'],
        ]);

        $resultat = auth()->attempt([
            'Login' => $request->input('login'),
            'password' =>    $request->input('mdp')
        ]);

        if(! $resultat)
        {
            return redirect("/boncoloc")->withInput()->withErrors([
                'mdp' => 'Login et/ou mot de passe incorrect.',
                'login' => "Login et/ou mot de passe incorrecte."
            ]);            
        }

        return $next($request);
    }
}
