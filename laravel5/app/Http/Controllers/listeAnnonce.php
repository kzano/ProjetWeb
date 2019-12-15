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

        $queryLogement = (new Logement)->newQuery();

        if($nbcoloc) $queryLogement->where('NbLocataire', $nbcoloc);
        if($surface) $queryLogement->where('Superficie','>',$surface);
        if($nbpieces) $queryLogement->where('NbPieces', $nbpieces);
        if($type) $queryLogement->where('Type', $type);
        if($cp) $queryLogement->where('CP', $cp);
        if($ameublement) $queryLogement->where('Ameublement', $ameublement);
        $queryLogement->where('Prix', '<', $prix);

        $result = $queryLogement->get();
        
        if(empty($result[0])) return back()->withInput()->withErrors([
            'logement' => 'Aucun logement trouvé par rapport à vos critères de recherche',
        ]);

        else if(!empty($requete->input('interets')))
        {
            $user = Utilisateur::where('Login', $login)->get();
            $sport = $user[0]->Sport;
            $lecture = $user[0]->Lecture;
            $arts = $user[0]->Arts;
            $musique = $user[0]->Musique;
            $jv = $user[0]->JeuxVideo;
            $fete = $user[0]->Fete;

            $usersIdentiques = Utilisateur::where("Sport", $sport)
                ->where('Lecture', $lecture)
                ->where('Arts', $arts)
                ->where('Musique', $musique)
                ->where('JeuxVideo', $jv)
                ->where('Fete', $fete)
                ->get();

            if(!empty($usersIdentiques[0]))
                {
                foreach ($usersIdentiques as $usersIdentiques) $tabUsersIdentique[] = $usersIdentiques->IdUtilisateur;

                foreach ($result as $logement) $tabLogement[] = $logement->IdLogement;

                $location = Location::whereIn('IdLogement', $tabLogement)->get();

                foreach ($location as $location) $tabLocation[] = $location->IdLocation;

                $resultatLocation = Location::whereIn('IdLocation', $tabLocation)
                    ->whereIn('IdUtilisateur', $usersIdentiques)
                    ->get();
                
                if(!empty($resultatLocation[0]))
                    {
                    foreach ($resultatLocation as $logementCompatible) $resultatLogement[] = $logementCompatible->IdLogement;
                
                    $result = Logement::whereIn('IdLogement', $resultatLogement)->get();
                    }
                else return back()->withInput()->withErrors([
                    'logement' => 'Aucun logement trouvé par rapport à vos critères de recherche',
                ]);
                }
            else return back()->withInput()->withErrors([
                'logement' => 'Aucun utilisateur ne possède les mêmes intérêts que vous',
            ]);
        }

        $nbResultat = $result->count();

        //Vue avec la liste des annonces et les logements disponibles
        return view('liste-annonces', compact('result'), ['nbResultat' => $nbResultat, 'login' => $login]);
    }

}
