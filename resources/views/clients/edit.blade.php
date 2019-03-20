@extends('layout')

@section('content')
<div class="row">
    <div class="medium-12 large-12 columns">
        <h4>Nieuwe klant</h4>
        <form action="" method="post">
            <div class="row">
                <div class="medium-4 small-12 columns">
                    <label>Titel</label>
                    <select name="form[title]">
                        <option value="mr" selected="selected">Mr.</option>
                        <option value="ms">Mw.</option>
                        <option value="mrs">Juf.</option>
                        <option value="dr">Dr.</option>
                    </select>
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Voornaam</label>
                    <input name="form[name]" type="text">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Achternaam</label>
                    <input name="form[lastName]" type="text">
                </div>
                <div class="medium-8 small-12  columns">
                    <label>Adres</label>
                    <input name="form[address]" type="text">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Postcode</label>
                    <input name="form[zipCode]" type="text">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Stad</label>
                    <input name="form[city]" type="text">
                </div>
                <div class="medium-4 small-12  columns">
                    <label>Provincie</label>
                    <input name="form[provincie]" type="text">
                </div>
                <div class="medium-12  columns">
                    <label>E-mail</label>
                    <input name="form[email]" type="text">
                </div>
                <div class="medium-12  columns">
                    <input value="BEWAAR" class="button success hollow" type="submit">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
