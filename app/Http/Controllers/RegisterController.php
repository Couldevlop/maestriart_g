<?php

namespace App\Http\Controllers;

use App\cdc;
use Illuminate\Support\Facades\Input; 
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RegisterController extends Controller
{
   public function traitement()
   {
    request()->validate([
     'email'=> ['required','email'],
     'nom' => ['required','min:8'],
    ]);
   }

    public function store(Request $request)
    {
        $cdc = new cdc();
        $cdc->nom = request('nom');
        $cdc->prenom = request('prenom');
        $cdc->datenais = request('datenaiss');
        $cdc->profession = request('profession');
        $cdc->datedebudirection = request('debutdirection');
        $cdc->contact1 = request('contact1');
        $cdc->contact2 = request('contact2');
        $cdc->localisation = request('localisation');
        $cdc->nationalite = request('nationalite'); 
        $cdc->statut = request('statut');
        $cdc->email = request('email');
        //var_dump($cdc);
        $cdc->chorale = request('chorale',array());
        
        $cdc->save();
    	
        
      //dump($cdc);

    }

}
