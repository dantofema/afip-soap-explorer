<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'AFIP SOAP EXPLORER' }}</title>
        @vite('resources/css/app.css')
        <link rel="icon" type="image/x-icon" href="{{ asset('alert.png') }}">
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
