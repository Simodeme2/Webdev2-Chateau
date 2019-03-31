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

                @foreach($clients as $client)
                    <tr>
<<<<<<< HEAD
                        <td>{{$client->first_name . ' ' . $client->last_name}}</td>
                        <td>{{$client->email}}</td>
                        <td>
                            <a class="hollow button" href="{{ route('clients.edit', 1) }}">BEWERK</a>
                            <a class="hollow button warning" href="{{ route('reservations.create', 1) }}">BOEK EEN KAMER</a>
                        </td>
                    </tr>
                @endforeach
=======
                        <td>{{$client->firstname . ' ' . $client->lastname }}</td>
                        <td>{{$client->email}}</td>
                        <td>
                            <a class="hollow button" href="{{ route('clients.edit', $client->id) }}">BEWERK</a>
                            <a class="hollow button warning" href="{{ route('reservations.create', $client->id) }}">BOEK EEN KAMER</a>
                        </td>
                    </tr>
                @endforeach

>>>>>>> 145086f35f513a84d7bd06cf3d60f3087e6c31cb
            </tbody>
        </table>
    </div>
</div>
@endsection
