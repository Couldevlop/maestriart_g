<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
       return view('pages.home');
    }

    public function about()
    {
       return view('pages.register');
    }

     public function contact()
    {
       return view('pages.contact');
    }
}
