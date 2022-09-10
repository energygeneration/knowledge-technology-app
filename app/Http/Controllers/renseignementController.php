<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\renseignement;

class renseignementController extends Controller
{
    //
    function renseignement(Request $req){
        $renseignement = new renseignement;
        $renseignement->nom=$req->nom;
        $renseignement->prenom=$req->prenom;
        $renseignement->email=$req->email;
        $renseignement->numeroTel=$req->numeroTel;
        $renseignement->contenu_message=$req->contenu_message;
        $renseignement->save();
        return ('vvbvb');
    }
}
