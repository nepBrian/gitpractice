<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tailwind</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    </head>
    <body>

        <div id="app">
            <header-component></header-component>
            <maincontent-component></maincontent-component>
            <footer-component></footer-component>
        </div>

        <script type="text/x-template" id="dropdown-link-template">
          <div class="relative">
            <div role="button" class="inline-block select-none" @click="open = !open">
              <slot name="link"></slot>
            </div>
            <div class="absolute pin-r w-full mt-2" v-show="open">
              <slot name="dropdown"></slot>
            </div>
          </div>
        </script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
