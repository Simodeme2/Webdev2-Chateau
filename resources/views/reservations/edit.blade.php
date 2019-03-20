@extends('layout')

@section('content')
<div class="row">
    <div class="medium-12 large-12 columns">
        <h4>Maak een reservatie</h4>
        <form action="" method="post">
            <div class="row">
                <div class="medium-2 small-6 columns">Boeking voor:</div>
                <div class="medium-2 small-6 columns"><b>Mr. Herr Seele</b></div>
                <div class="medium-1 small-12 columns">Van:</div>
                <div class="medium-2 small-6 columns"><input name="dateFrom" value="" type="text" class="datepicker" /></div>
                <div class="medium-1 small-12 columns">Tot:</div>
                <div class="medium-2 small-6 columns"><input name="dateTo" value="" type="text" class="datepicker" /></div>
                <div class="medium-2 small-12 columns"><input class="button" type="submit" value="ZOEK" /></div>
            </div>
        </form>

        <table>
            <thead>
                <tr>
                    <th width="200">Kamer</th>
                    <th width="200">Beschikbaarheid</th>
                    <th width="200">Actie</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>101</td>
                    <td>
                        <div class="callout success">
                            Beschikbaar
                        </div>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>
                        <div class="callout success">
                            Beschikbaar
                        </div>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>201</td>
                    <td>
                        <div class="callout success">
                            Beschikbaar
                        </div>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>202</td>
                    <td>
                        <div class="callout success">
                            Beschikbaar
                        </div>
                    </td>
                    <td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
