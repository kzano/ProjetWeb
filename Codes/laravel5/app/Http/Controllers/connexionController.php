<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur as User;

class connexionController extends Controller
{
    public function postConnexion(Request $requete)
    {
        $log = $requete->input('login');
        $mdp = $requete->input('mdp');

        $resultatLog = User::where('Login', $log)->get();    

        if(empty($resultatLog) | $resultatLog =="[]") 
        {
            $requete->session()->put('log', 'erreurConnexion');
            return redirect("/boncoloc");
        }

        else if($resultatLog[0]->Mdp == $mdp) 
        {
            $requete->session()->put('log', $log);
            return redirect("/boncoloc/accueil");
        }
        else
        {
            $requete->session()->put('log', 'erreurConnexion');
            return redirect("/boncoloc");
        }
        //else return view('accueil');
    }
}
