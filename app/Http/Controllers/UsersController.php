<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function getData(Request $req){
        $req->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'NumeroTel'=>'required',
            'contenu_message'=>'required',
        ]);
        return $req->input();
    }
}
