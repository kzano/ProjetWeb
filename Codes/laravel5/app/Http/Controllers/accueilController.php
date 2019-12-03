<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accueilController extends Controller
{
    public function getPage(Request $requete){
         return view('accueil', ['login' => auth()->user()->Login]);
    }


}
