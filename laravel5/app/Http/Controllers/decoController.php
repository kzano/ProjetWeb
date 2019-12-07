<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class decoController extends Controller
{
    public function controleDisconnect(Request $requete)
    {
        auth()->logout();

        return redirect("/boncoloc");
    }
}
