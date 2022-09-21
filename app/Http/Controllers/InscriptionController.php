<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller\Inscription;
use App\Http\Controllers\InscriptionController;

class InscriptionController extends Controller
{
    public function Inscription(){

        $inscriptions = Inscription::all();
            
        return view('layouts.Inscriptions', compact('Inscription'));
    }
 }
