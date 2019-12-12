<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageConnexion extends Controller
{
    public function getPage()
    {   
        auth()->logout();       
        return view('boncoloc');
    }

    public function aldo(){
        return redirect('/boncoloc/inscription');
    }
}
