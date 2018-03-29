<?php

namespace App\Http\Controllers;

use App\cdc;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
   public function create()
    {
       
    }

    public function store(RegisterRequest $request)
    {
    	$cdc = new cdc;
    	$cdc->nom = $request->first_name;
    	$cdc->prenom = $request->last_name;
    	$cdc->datenais = $request->datenaiss;
    	$cdc->profession = $request->profession;
    	$cdc->datedebudirection = $request->debutdirection;
    	$cdc->contact1 = $request->contact1;
    	$cdc->contact2 = $request->contact2;
    	$cdc->localisation = $request->localisation;
    	$cdc->nationalite = $request->nationalite;
    	$cdc->email = $request->email;
    	$cdc->statut = $request->statut;
    	$cdc->save();
       return view('pages.confirm');
    }
}
