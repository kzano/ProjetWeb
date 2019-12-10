<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class decoController extends Controller
{
    //Deconnecter l'utilisateur courant
    public function controleDisconnect(Request $requete)
    {
        auth()->logout();

        return redirect("/boncoloc");
    }
}
