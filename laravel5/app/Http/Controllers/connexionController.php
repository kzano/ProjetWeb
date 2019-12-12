<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur as User;
use App\Models\Location;

class connexionController extends Controller
{
    public function postConnexion()
    {
            $login = auth()->user()->Login;
            $profil = User::select('TypeProfil')->where('Login', $login)->get();

            //Vérifier le type de profil de l'utilsateur
            if($profil[0]->TypeProfil == "chercheur") return redirect("/boncoloc/rechercheLogement"); //Si c'est un chercheur, renvoyer vers lien /boncoloc/accueil
            else 
            {//Sinon si c'est un annonceur
                $idUtilisateur = User::select('IdUtilisateur')->where('Login', $login)->get();
                $idLocation = Location::select('IdLocation')->where('IdUtilisateur', $idUtilisateur[0]->IdUtilisateur)->get();

                
                if(empty($idLocation[0]->IdLocation)) return redirect("/boncoloc/ajoutAnnonce"); //Si l'annonceur n'a jamais publié une annonce le renvoyer vers une page pour l'ajout d'un logement
                else 
                {//Sinon le renvoyer vers son annonce qu'il pourra supprimer ou modifier
                    return redirect('/boncoloc/monAnnonce');
                }//return "TU AS DEJA PUBLIE QUELQUE CHOSE !!!";
            }
    }
}
