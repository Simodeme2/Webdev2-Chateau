<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
	public function getIndex() {
		return view('reservations.index');
	}

	public function getCreate() {
		return view('reservations.edit');
	}

	public function getEdit() {
		return view('reservations.edit');
	}

	public function postSave() {

	}
}
