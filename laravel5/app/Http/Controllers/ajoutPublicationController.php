<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Location;
use App\Models\Logement;
use Illuminate\Support\Facades\Storage;

class ajoutPublicationController extends Controller
{
    public function getPage(){
        return view('ajout', ['login' => auth()->user()->Login]);
    }

    public function postAjoutAnnonce(){
        Request()->validate([
            'titre' => ['required'],
            'description' => ['required'],
            'pieces' => ['required'],
            'type' => ['required'],
            'ameublement' => ['required'],
            'nbcoloc' => ['required'],
            'ville' => ['required'],
            'cp' => ['required'],
            'surface' => ['required'],
            'prix' => ['required'],
            'photo1' => ['required', 'image'],
            'photo2' => ['required', 'image'],
            'photo3' => ['required', 'image'],
            ]);
            
         
        $img1 = Request('photo1')->store('annonces');
        $img2 = Request('photo2')->store('annonces');
        $img3 = Request('photo3')->store('annonces');

        $logement = new Logement;
        $logement->Titre = Request('titre');
        $logement->Type = Request('type');
        $logement->Superficie = Request('surface');
        $logement->NbPieces = Request('pieces');
        $logement->Ville = Request('ville');
        $logement->CP = Request('cp');
        $logement->NbLocataire = Request('nbcoloc');
        $logement->Prix = Request('prix');
        $logement->Description = Request('description');
        $logement->Ameublement = Request('ameublement');
        $logement->Image_1 = $img1;
        $logement->Image_2 = $img2;
        $logement->Image_3 = $img3;

        $logement->save();

        $log = auth()->user()->Login;

        $idUtilisateur = Utilisateur::select('IdUtilisateur')->where('Login', $log)->get();
        $idLogement = Logement::select('IdLogement')->where('Image_1', $img1)->get();

        $location = new Location;

        $location->IdUtilisateur = $idUtilisateur[0]->IdUtilisateur;;
        $location->IdLogement = $idLogement[0]->IdLogement;

        $location->save();

        return "TOUT EST OK !! ";
        
    }
}