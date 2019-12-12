<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logement;
use App\Models\Location;
use App\Models\Utilisateur;

class listeAnnonce extends Controller
{
    public function getPage(Request $requete)
    {
        
        $login = auth()->user()->Login;

        //Récuperer les données de la requete
        $prix = $requete->input('prix');
        $nbcoloc = $requete->input('nbcoloc');
        $surface = $requete->input('superficie');
        $nbpieces = $requete->input('nbpieces');
        $type = $requete->input('type');
        $cp = $requete->input('cp');
        $ameublement = $requete->input('ameublement');

        //Donner un signe en fonction des données
        $signeNbColoc = $this->signeWhere($nbcoloc);
        $signeNbPieces = $this->signeWhere($nbpieces);
        $signeType = $this->signeWhere($type);
        $signeCp = $this->signeWhere($cp);
        $signeAmeublement = $this->signeWhere($ameublement);

        if(empty($surface)) $signeSurface = '<>';
        else $signeSurface = '>';

        //Récuperer les logement en fonction des critères
        $result = Logement::where('Prix', '<=', $prix)
            ->where('CP', $signeCp, $cp)
            ->where('Superficie', $signeSurface, $surface)
            ->where('NbPieces', $signeNbPieces, $nbpieces)
            ->where('NbLocataire', $signeNbColoc, $nbcoloc)
            ->where('Ameublement', $signeAmeublement, $ameublement)
            ->where('Type', $signeType, $type)
            ->get();

        $nbResultat = $result->count();
        //Vue avec la liste des annonces et les logements disponibles
        return view('liste-annonces', compact('result'), ['nbResultat' => $nbResultat, 'login' => $login]);
    }

    //Définir si la donnée dans la requete est vide
    //Et donner un signe dans le where ci-dessus en fonction du contenu
    public function signeWhere($donnee){
        if(empty($donnee)) return '<>'; //On retourne ce signe qui veut dire "différent de.." car tous les champs de la BDD sont obligatoirement remplis
        else return '=';
    }
}
