<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">

  <title>@yield('title', 'Chateau')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  
  <link rel="stylesheet" href="{{ asset('css/app-chateau.css') }}">
  <meta class="foundation-mq">
</head>

<body>

    @include('partials/header')

    @yield('content')

    @include('partials/footer')
    @include('partials/scripts')
    
    </body>
</html>