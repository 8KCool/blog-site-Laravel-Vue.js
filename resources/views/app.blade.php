<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>

<<<<<<< HEAD
        <title>Chainlink</title>
=======
        <title>Chain Link - where blockchain ethusiasts learn, share & build careers</title>
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
    </head>
    <body>
        <div id="app">
            <v-app app>
                <app-home/>
            </v-app>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
