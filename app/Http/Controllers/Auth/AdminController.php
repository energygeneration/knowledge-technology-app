<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\renseignement;
use App\Models\renseignementAdmin;
use App\Http\Controllers\AdminController;

class AdminController extends Controller
{
    //
   

    public function deleteuser($id){

        $users = User::find($id);
        $users->delete();
        return redirect()->back();
    }

    public function renseignement(){

        $cantact = renseignementAdmin::all();
        return view('layouts.renseignementAdmin', compact('renseignement'));
    }

    
}