<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('root_path')->get('/', function(){
	return view('pages.home');
});

Route::name('resgister_path')->get('/register', function(){
	return view('pages.register');
});

//Route::name('register_path')->post('/register', 'RegisterController@store');
Route::name('register_path')->post('/register', function(){
       $cdc = App\cdc::create([
    	'nom' => request('nom'),
    	'prenom' => request('prenom'),
    	'datenais' =>request('datenaiss'),
    	'profession' => request('profession'),
    	'datedebudirection' => request('debutdirection'),
    	'contact1' => request('contact1'),
    	'contact2' => request('contact2'),
    	'localisation' => request('localisation'),
    	'nationalite' => request('nationalite'),
    	'statut' => request('statut'),
    	'email' => request('email'),
    	'instrument' => request('instrument'),

    	
]);
return "Bien enregistré";
});
