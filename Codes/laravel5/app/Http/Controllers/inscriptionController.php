<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur as User;

class inscriptionController extends Controller
{
    public function getPage()
    {
        return view('inscription');
    }

    public function IfEmpty($val)
    {
        if(empty($val)) return false;
        else return true;
    }

    public function ajout(Request $requete)
    {

        $utilisateur = new User;

        //Préférences
        $utilisateur->Sport = $this->IfEmpty($requete->input('sport'));
        $utilisateur->Arts = $this->IfEmpty($requete->input('arts'));
        $utilisateur->JeuxVideo = $this->IfEmpty($requete->input('j-v'));
        $utilisateur->Fete = $this->IfEmpty($requete->input('fete'));
        $utilisateur->Lecture = $this->IfEmpty($requete->input('lecture'));
        $utilisateur->Musique = $this->IfEmpty($requete->input('musique'));

        //Utilisateur
        $utilisateur->Prénom = $requete->input('name');
        $utilisateur->Nom = $requete->input('lastname');
        $utilisateur->DateNaissance = $requete->input('date');
        $utilisateur->Mail = $requete->input('mail');
        $utilisateur->Tel = $requete->input('phone');

        //Identifiant
        $utilisateur->Login = $requete->input('login');
        $utilisateur->Mdp = bcrypt($requete->input('mdp'));

        //profil
        $utilisateur->TypeProfil =$requete->input('profil');

        $utilisateur->save();

        sleep(3);

        return redirect("/boncoloc");
    }

}
