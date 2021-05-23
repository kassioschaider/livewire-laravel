<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>
        @livewireStyles
    </head>
    <body class="antialiased">
        <livewire:product-create></livewire:product-create>
        @livewireScripts
    </body>
</html>
