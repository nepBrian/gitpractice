<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tailwind Practice</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

        <div id="app">
            <header-component></header-component>
            <navbar-component></navbar-component>
            <maincontent-component></maincontent-component>
            <footer-component></footer-component>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
