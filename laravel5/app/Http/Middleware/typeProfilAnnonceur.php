<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Utilisateur;
class typeProfilAnnonceur
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
        if($user->TypeProfil != "annonceur") return redirect('/boncoloc/rechercheLogement');

        return $next($request);
    }
}
