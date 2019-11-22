<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class decoController extends Controller
{
    public function controleDisconnect(Request $requete)
    {
        $requete->session()->put('log', '');
        return redirect('/boncoloc');
    }
}
