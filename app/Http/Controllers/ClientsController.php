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

		$titles = Title::all();

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

		$clientId = (request('id')) ? request('id') : null;

		request()->validate([
			// 'title_id' => 	'required|between1,4|numeric',
			'first_name' => 'required|max:255',
			'last_name' => 	'required|max:255',
			'email' => 		'required|max:55|email|unique:clients,email,' . $clientId,
			'zipcode' => 	'required|max:10',
			'address' => 	'required|max:255',
			'city' => 		'required|max:255',

		]);

		// $request = request()->all();

		$data = [
			'title_id' => request('title'),
			'first_name' => request('first_name'),
			'last_name' => request('last_name'),
			'email' => request('email'),
			'address' => request('address'),
			'zipcode' => request('zipcode'),
			'city' => request('city'),
			'province' => request('province'),
		];
		

		Client::UpdateOrCreate(['id' => $clientId], $data);

		return redirect()->route('clients.index');
    	/*
    	$id = null;
    	$postArray = [];

    	Client::updateOrCreate(
    		$id,
		    $postArray
	    );
    	*/

    	// save in database
    }
}
