<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logement;

class annonceController extends Controller
{
    public function getPage(Request $requete)
    {
        
        //Récuperer les données de la requete
        $prix = $requete->input('prix');
        $nbcoloc = $requete->input('nbcoloc');
        $surface = $requete->input('superficie');
        $nbpieces = $requete->input('nbpieces');
        $type = $requete->input('type');
        $ville = $requete->input('ville');
        $ameublement = $requete->input('ameublement');

        //Donner un signe en fonction des données
        $signeNbColoc = $this->signeWhere($nbcoloc);
        $signeSurface = $this->signeWhere($surface);
        $signeNbPieces = $this->signeWhere($nbpieces);
        $signeType = $this->signeWhere($type);
        $signeVille = $this->signeWhere($ville);
        $signeAmeublement = $this->signeWhere($ameublement);

        //Récuperer les logement en fonction des critères
        $result = Logement::where('Prix', '<=', $prix)
            ->where('CP', $signeVille, $ville)
            ->get();

        //Vue avec la liste des annonces et les logements disponibles
        return view('liste-annonces', compact('result'));
    }

    //Définir si la donnée dans la requete est vide
    //Et donner un signe dans le where ci-dessus en fonction du contenu
    public function signeWhere($donnee){
        if(empty($donnee)) return '<>'; //On retourne ce signe qui veut dire "différent de.." car tous les champs de la BDD sont obligatoirement remplis
        else return '=';
    }
}
