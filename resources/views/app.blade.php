<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    <div class="container px-4 py-8">
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
