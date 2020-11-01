<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gestion Des Stagiaires</title>

    <link href="{{ asset('appcss') }}/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('appcss') }}/paper-dashboard.css" rel="stylesheet"/>
</head>
<body>
    <div id="app">
        <main class="py-4">
          @auth()
            @include('layouts.header')
          @endauth
          @yield('content')
        </main>
    </div>
</body>
</html>
