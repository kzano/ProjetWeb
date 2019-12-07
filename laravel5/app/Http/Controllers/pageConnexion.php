<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageConnexion extends Controller
{
    public function getPage(Request $requete)
    {   
        auth()->logout();       
        return view('index');
    }

    public function aldo(){
        return redirect('/boncoloc/inscription');
    }
}
