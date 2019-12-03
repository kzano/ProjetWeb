<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageConnexion extends Controller
{
    public function getPage(Request $requete)
    {   
        auth()->logout();
        if($requete->session()->get('log') == 'erreurConnexion')
        {
            $classe = 'is-invalid';
        }
        else $classe = '';
        
        return view('index', ['class' => $classe]);
    }

    public function aldo(){
        return redirect('/boncoloc/inscription');
    }
}
