<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur as User;

class connexionController extends Controller
{
    public function postConnexion(Request $requete)
    {
        $resultat = auth()->attempt([
            'Login' => $requete->input('login'),
            'password' =>    $requete->input('mdp')
        ]);

        if($resultat = true)
        {
            $requete->session()->put('log', $requete->input('login'));
            return redirect("/boncoloc/accueil");
        }
        else
        {
            $requete->session()->put('log', 'erreurConnexion');
            return redirect("/boncoloc");
        }
    }
}
