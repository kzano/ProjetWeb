<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accueilController extends Controller
{
    public function getPage(Request $requete){
        $login = $requete->session()->get('log');

        if($login == '' | $login == 'erreurConnexion') return redirect('/boncoloc');
        return view('accueil', ['login' => $login]);
    }


}
