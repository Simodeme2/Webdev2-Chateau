@extends('layout')

@section('content')
<div class="row">
    <div class="medium-12 large-12 columns">
        <h4>KLANTEN</h4>
        <div class="row">
            <div class="medium-2 columns">
                <a class="button hollow success" href="{{ route('clients.create') }}">
                    VOEG KLANT TOE
                </a>
            </div>
        </div>
        <table class="stack">
            <thead>
                <tr>
                    <th width="200">Name</th>
                    <th width="200">Email</th>
                    <th width="200">Action</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Mr. Herr Seele</td>
                    <td>herr.seele@humo.be</td>
                    <td>
                        <a class="hollow button" href="{{ route('clients.edit', 1) }}">BEWERK</a>
                        <a class="hollow button warning" href="{{ route('reservations.create', 1) }}">BOEK EEN KAMER</a>
                    </td>
                </tr>

                <tr>
                    <td>Mr. Luc Charles Zeebroek</td>
                    <td>kamagurka@humo.be</td>
                    <td>
                        <a class="hollow button" href="{{ route('clients.edit', 2) }}">BEWERK</a>
                        <a class="hollow button warning" href="{{ route('reservations.create', 2) }}">BOEK EEN KAMER</a>
                    </td>
                </tr>
                <tr>
                    <td>Ms. Eva Moutin</td>
                    <td>eva.mouton@flair.be</td>
                    <td>
                        <a class="hollow button" href="{{ route('clients.edit', 3) }}">BEWERK</a>
                        <a class="hollow button warning" href="{{ route('reservations.create', 3) }}">BOEK EEN KAMER</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection
