<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur as User;

class connexionController extends Controller
{
    public function postConnexion()
    {
            $profil = User::select('TypeProfil')->where('Login', auth()->user()->Login)->get();
            if($profil[0]->TypeProfil == "chercheur") return redirect("/boncoloc/accueil");
            else return redirect("/boncoloc/ajoutAnnonce");
    }
}
