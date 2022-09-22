<?php

namespace App\Http\Controllers;

use App\Models\newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\NewsletterController;

class NewsletterController extends Controller
{
    //

    function newsletter(Request $req){
        $newsletter = new newsletter;
        $newsletter->email=$req->email;
    
        $newsletter->save();
        return ('Votre  email a été envoyé succès ! Vous recevrez desormais des notiffications de la part de KNOWLEDGE TECHNOLOGY');
    }
}
