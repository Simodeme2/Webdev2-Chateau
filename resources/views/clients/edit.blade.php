@extends('layout')

@section('content')
<div class="row">
    <div class="medium-12 large-12 columns">
        <h4>Nieuwe klant</h4>
        <form action="{{ route('clients.save') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $client->id }}" />

            <div class="row">
                <div class="medium-4 small-12 columns">
                    <label>Titel</label>
                    <select name="title">
                        <option value="mr" selected="selected">Mr.</option>
                        <option value="ms">Mw.</option>
                        <option value="mrs">Juf.</option>
                        <option value="dr">Dr.</option>
                    </select>
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Voornaam</label>
                    <input name="firstname" type="text">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Achternaam</label>
                    <input name="lastname" type="text">
                </div>
                <div class="medium-8 small-12  columns">
                    <label>Adres</label>
                    <input name="address" type="text">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Postcode</label>
                    <input name="zipcode" type="text">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Stad</label>
                    <input name="city" type="text">
                </div>
                <div class="medium-4 small-12  columns">
                    <label>Provincie</label>
                    <input name="province" type="text">
                </div>
                <div class="medium-12  columns">
                    <label>E-mail</label>
                    <input name="email" type="text">
                </div>
                <div class="medium-12  columns">
                    <button class="button success hollow" type="submit">BEWAAR</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
