<?php

namespace App\Http\Controllers;

use App\chorales;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
 
class ChoraleController extends Controller
{


	 public function prerempli()
	    {
	         $chorales= chorales::all();
	        //dd($chorales);
	        return view('pages.register', [
	        'chorales'=> $chorales,]);

	    }

     public function store()
	    {
	       return view('pages.chorale');
	    }


   
}
