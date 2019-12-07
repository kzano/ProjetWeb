<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class annonceController extends Controller
{
    public function getPage()
    {
        $nb = 'jbouteille';
        $result = Utilisateur::where('Login', $nb)->get();
        return view('liste-annonces', compact('result'));
    }
}
