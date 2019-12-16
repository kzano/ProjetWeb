<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logement;
use App\Models\Location;

class supprimerAnnonceController extends Controller
{
    public function delete($id){

        $logement = Logement::find($id);
        $location = Location::where('IdLogement', $id)->first();

        
        $location->delete();
        $logement->delete();

        session()->flash('suppr', 'Votre annonce a été supprimée. Vous pouvez si vous le souhaitez en poster une nouvelle ! ');

        return redirect('/boncoloc/ajoutAnnonce');
        
    }
}
