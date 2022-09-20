<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FormulaireInscription;
use App\Http\Controllers\FormulaireInscriptionController;

class FormulaireInscriptionController extends Controller
{
    //
    function FormulaireInscription(Request $req){
        $FormulaireInscription = new FormulaireInscription;
        $FormulaireInscription->nom=$req->nom;
        $FormulaireInscription->prenom=$req->prenom;
        $FormulaireInscription->date_Naissance=$req->date_Naissance;
        $FormulaireInscription->prefecture=$req->prefecture;
        $FormulaireInscription->sexe=$req->sexe;
        $FormulaireInscription->numeroTel=$req->numeroTel;
        $FormulaireInscription->email=$req->email;
        $FormulaireInscription->fichiers=$req->fichiers;
        $FormulaireInscription->filiere=$req->filiere;
        $FormulaireInscription->save();
        return ('Merci; Vos informations personnelles ont étés envoyées avec succès ! Nous vous contacterons après études de votre dossier.');
    }

    public function Inscription(){

        $Inscriptions = Inscription::all();
        
        return view('layouts.Inscriptions', compact('Inscription'));
    }


}
