<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateur;
use App\Models\Logement;
use App\Models\Location;

class modificationAnnonceController extends Controller
{
    public function getPageModification(){
    $login = auth()->user()->Login;

    $user = Utilisateur::where('Login', $login)->first();
    $location = Utilisateur::find($user->IdUtilisateur)->locations;
    $annonce = Location::find($location->IdLocation)->logement;

    return view('modificationAnnonce', compact('annonce'));
    }

}
