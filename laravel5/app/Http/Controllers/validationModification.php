<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logement;

class validationModification extends Controller
{
    public function validateModification(Request $requete, $id){

        $logement = Logement::find($id);
        $logement->update([
            'Titre' => Request('titre'),
            'Description' => Request('description'),
            'Type' => Request('type'),
            'NbPieces' => Request('pieces'),
            'Ameublement' => Request('ameublement'),
            'NbLocataire' => Request('nbcoloc'),
            'Ville' => Request('ville'),
            'CP' => Request('cp'),
            'Superficie' => Request('surface'),
            'Prix' => Request('prix'),
        ]);

        $logement->save();

        session()->flash('modification','Votre annonce est actualisée ! ');

        return redirect('/boncoloc/monAnnonce');
    }
}
