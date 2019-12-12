<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logement;
use App\Models\Utilisateur;
use App\Models\Location;

class monAnnonceController extends Controller
{
    public function getPage(){

        $login = auth()->user()->Login;

        $userId = Utilisateur::where('Login', $login)->get();
        $user = Utilisateur::find($userId[0]->IdUtilisateur);
        $location = Utilisateur::find($user->IdUtilisateur)->locations;
        $annonce = Location::find($location->IdLocation)->logement;

        return view('editionAnnonce', compact('user'), compact('annonce'));
    }
}
