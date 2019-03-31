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
                        @foreach($titles as $title) :
                            <option value="{{$title->id}}">
                                {{ucfirst($title->name)}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Voornaam</label>
                    <input name="first_name" type="text" value="{{old('first_name', $client->first_name)}}">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Achternaam</label>
                    <input name="last_name" type="text" value="{{old('last_name', $client->last_name)}}">
                </div>
                <div class="medium-8 small-12  columns">
                    <label>Adres</label>
                    <input name="address" type="text" value="{{old('address', $client->address)}}">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Postcode</label>
                    <input name="zipcode" type="text" value="{{old('zipcode', $client->zipcode)}}">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Stad</label>
                    <input name="city" type="text" value="{{old('city', $client->city)}}">
                </div>
                <div class="medium-4 small-12  columns">
                    <label>Provincie</label>
                    <input name="province" type="text" value="{{old('province', $client->province)}}">
                </div>
                <div class="medium-12  columns">
                    <label>E-mail</label>
                    <input name="email" type="text" value="{{old('email', $client->email)}}">
                </div>
                <div class="medium-12  columns">
                    <button class="button success hollow" type="submit">BEWAAR</button>
                </div>
            </div>
        </form>

        {{-- @if($errors->any()) --}}
        <div style="background-color: red; color:white;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
