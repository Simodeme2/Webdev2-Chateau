<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Title;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function getIndex() {


    	$clients = Client::all();


	    return view('clients.index')->with(compact('clients'));
    }

    public function getCreate(Client $client) {

    	// alle aansprekingen ophalen uit db
    	$titles = Title::all();

    	// dump & die
		// dd($titles);

	    return view('clients.edit')->with(compact('client', 'titles'));

    }

    public function getEdit($clientId) {

    	$client = Client::findOrFail($clientId);
	    $titles = Title::all();

	    return view('clients.edit')->with(compact('client', 'titles'));

	    // check if client exists
	    // if(!$client->id) abort('404');
    }

    public function postSave() {

    	\request()->validate([
    		'title' =>      'required|between:1,4|numeric',
		    'firstname' =>  'required|max:255',
		    'lastname' =>   'required|max:255',
		    'email' =>      'required|max:255|email|unique:clients,email',
		    'zipcode' =>    'required|max:10',
		    'address' =>    'required|max:255',
		    'city' =>       'required|max:255',
		    'province' =>   'required|max:255',
	    ]);

    	// $request = request()->all();

    	$data = [
    		'title_id' => request('title'),
    		'firstname' => request('firstname'),
		    'lastname' => request('lastname'),
		    'address' => request('address'),
		    'zipcode' => request('zipcode'),
		    'city' =>  request('city'),
		    'province' => request('province'),
		    'email' => request('email')
	    ];

    	Client::create($data);


    	return redirect()->route('clients.index');


    	// dd($firstname);




    	/*
    	$id = request('id');
    	$postArray = [
    		'title_id',
    		'firstname' => $title,

	    ];

    	Client::updateOrCreate(
    		$id,
		    $postArray
	    );
    	*/

    	// save in database
    }
}
