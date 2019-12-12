<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logement;
use App\Models\Location;

class annonce extends Controller
{
    public function getPage($id){

        $login = auth()->user()->Login;

        $annonce = Logement::find($id);

        $location = Logement::find($annonce->IdLogement)->locations;

        $user = Location::find($location->IdLocation)->utilisateur;

        return view('annonce', compact('annonce'), compact('user'));
    }
}
