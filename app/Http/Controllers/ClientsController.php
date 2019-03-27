<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function getIndex() {
	    return view('clients.index');
    }

    public function getCreate(Client $client) {
	    return view('clients.edit')->with(compact('client'));
    }

    public function getEdit(Client $client) {

    	// check if client exists
    	// if(!$client->id) abort('404');

	    return view('clients.edit')->with(compact('client'));
    }

    public function postSave() {
		// save in database
    }
}
