<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inscrts extends Controller
{
    //

    public function inscrit(){

        $inscrits = inscrit::all();
        
        return view('layouts.inscrits', compact('inscrits'));
    }
}
