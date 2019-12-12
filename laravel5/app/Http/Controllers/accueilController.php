<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accueilController extends Controller
{
    //Retourner la page de l'accueil d'un chercheur avec son login
    public function getPage(){
         return view('rechercherLogement', ['login' => auth()->user()->Login]);
    }


}
