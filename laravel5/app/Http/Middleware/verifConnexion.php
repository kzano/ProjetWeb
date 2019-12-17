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
        //Vérifier que les champs sont rentrés 
        $request->validate([
            'login' => ['required'],
            'mdp' => ['required'],
        ]);

        //Vérifier que l'utilisateur et le mdp est correct
        $resultat = auth()->attempt([
            'Login' => $request->input('login'),
            'password' =>    $request->input('mdp')
        ]);

        //Si l'utilisateur et/ou mdp incorrect
        if(! $resultat)
        {
            //Renvoyer vers la page d'accueil avec des erreurs
            return redirect("/boncoloc")->withInput()->withErrors([
                'mdp' => 'Login et/ou mot de passe incorrect.',
                'login' => "Login et/ou mot de passe incorrecte."
            ]);            
        }

        //Sinon faire la suite du code = utilisateur et mdp ok
        return $next($request);
    }
}
