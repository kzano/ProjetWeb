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
        $requete->validate([
            'sport' => [],
            'arts' => [],
            'j-v' => [],
            'fete' => [],
            'lecture' => [],
            'musique' => [],
            'name' => ['required'],
            'lastname' => ['required'],
            'date' => ['required', 'date'],
            'mail' => ['required', 'email'],
            'phone' => ['required'],
            'login' => ['required'],
            'mdp' => ['required','confirmed','min:8'],
            'mdp_confirmation' => ['required'],
            'profil' => ['required'],
        ]);

        $utilisateur = New User;
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
        $mail = $requete->input('mail');
        $utilisateur->Mail = $mail;
        $utilisateur->Tel = $requete->input('phone');

        //Identifiant
        $log = $requete->input('login');
        $utilisateur->Login = $log;
        $utilisateur->Mdp = bcrypt($requete->input('mdp'));

        //profil
        $utilisateur->TypeProfil =$requete->input('profil');

        $res1 = User::select('Login')->where('Login', $log)->get();
        $res2 = User::select('Mail')->where('Mail', $mail)->get();
        
        if(empty($res1[0]) && empty($res2[0]))
        {
        $utilisateur->save();

        sleep(3);

        return redirect("/boncoloc");
        }
        else
        {
            if(!empty($res1[0]) && !empty($res2[0]))
            {
                return back()->withInput()->withErrors([
                    'mail' => 'Adresse mail déjà utilisée',
                    'login' => 'Login déjà utilisé',
                ]);
            }

            else if(!empty($res1[0]))
            {
                return back()->withInput()->withErrors([
                    'login' => 'Login déjà utilisé',
                ]);
            }

            else if(!empty($res2[0]))
            {
                return back()->withInput()->withErrors([
                    'mail' => 'Adresse mail déjà utilisée',
                ]);
            }
        }
    }

}