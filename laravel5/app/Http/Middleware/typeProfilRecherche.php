<?php

namespace App\Http\Middleware;
use App\Models\Utilisateur;
use Closure;

class typeProfilRecherche
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
        if(auth()->guest()) return redirect('/boncoloc');

        $user = Utilisateur::select('TypeProfil')->where('Login', auth()->user()->Login)->first();
        if($user->TypeProfil != "chercheur") return redirect('/boncoloc');

        return $next($request);
    }
}
