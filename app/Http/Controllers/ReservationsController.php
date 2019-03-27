<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
	public function getIndex() {
		return view('reservations.index');
	}

	public function getCreate(Reservation $reservation) {
		return view('reservations.edit')->with(compact('client'));
	}

	public function getEdit(Reservation $reservation) {
		return view('reservations.edit')->with(compact('client'));
	}

	public function postSave() {

	}
}
