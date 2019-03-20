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

Route::get('/', function () {return view('pages.home');})->name('home');

Route::get('/klanten', function () {return view('clients.index');})->name('clients');
Route::get('/klanten/nieuw', function () {return view('clients.edit');})->name('clients.create');
Route::get('/klanten/bewerk/{client_id}', function ($client_id) {return view('clients.edit', ['client_id' => $client_id]);})->name('clients.edit');


Route::get('/reservaties', function () {return view('reservations.index');})->name('reservations');
Route::get('/reservaties/nieuw/{client_id}', function ($client_id) {return view('reservations.edit', ['client_id' => $client_id]);})->name('reservations.create');
Route::get('/reservaties/bewerk/{reservation_id}', function ($reservation_id) {return view('reservations.edit', ['id' => $reservation_id]);})->name('reservations.edit');