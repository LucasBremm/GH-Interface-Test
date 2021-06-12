<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">
        <div id="app">
            <contact-index logo_path="{{ asset('images/logo.png') }}" arrow_path="{{ asset('images/grupo_43.png') }}" ></contact-index>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
