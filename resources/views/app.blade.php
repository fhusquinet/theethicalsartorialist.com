<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-control" content="public">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        <title>The Ethical Sartorialist</title>
        <meta name="description" content="An ethical approach to the sartorial style, made simple and accessible to everyone.">
        <link rel="stylesheet" type="text/css" href="{{ asset( mix('css/app.css') ) }}" />
    </head>
    <body class="bg-body relative">
        
        @include ('_layouts.navigation')
        
        @section ('main')
            <main class="main-content">
                @yield ('top-content')
                @section ('content-container')
                    <div class="container main-container px-4 py-8">
                        @yield ('content')
                    </div>
                @show
            </main>
        @show

        @include ('_layouts.footer')
        
        @include ('_layouts.search-form')
        
        @include ('_layouts.off-canvas-navigation')
        
        <script type="text/javascript" src="{{ asset( mix('js/app.js') ) }}"></script>
    </body>
</html>
