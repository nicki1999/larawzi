<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/js/app.js')
@inertiaHead
@if (app()->isLocal())
    <script src="http://localhost:8098"></script>
@endif
    </head>
    <body >
     @inertia
    </body>
</html>
