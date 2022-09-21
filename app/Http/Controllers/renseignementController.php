<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\renseignement;

class renseignementController extends Controller
{
    
    function renseignements(Request $req){
        $customer = new Renseignement;
        $customer->nom=$req->nom;
        $customer->prenom=$req->prenom;
        $customer->email=$req->email;
        $customer->numeroTel=$req->numeroTel;
        $customer->contenu_message=$req->contenu_message;
        $customer->save();
        return ('Votre message à été envoyer avec succès !');
    }
}
