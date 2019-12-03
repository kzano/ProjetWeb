<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur as User;

class connexionController extends Controller
{
    public function postConnexion(Request $requete)
    {
            $requete->session()->put('log', '');
            return redirect("/boncoloc/accueil");
    }
}
