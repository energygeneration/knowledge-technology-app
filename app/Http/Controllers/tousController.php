<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tousController extends Controller
{
    //
    public function showDatabase(){
        $tasks = tousinscripts::orderBy('order', 'ASC')->select('id', 'nom', 'prenom', 'date_Naissance', 'prefecture', 'sexe', 'numeroTel', 'email', 'fichiers', 'filiere')->get();


        return view('tousinscrits', compact('tasks'));
    }

    public function tousinscrits(Request $request){
        $tasks = tousinscrits::all();
            foreach($tasks as $task){
                $task->timestamps = false;
                 
                $id = $task->id;
                    foreach($request->order as $order) {
                        if($order['id']==$id){
                            $task->update(['order'=>$order['position']]);
                        }
                    }
                    
            }
            return response('Update successfully', 200);
    }
    
}


