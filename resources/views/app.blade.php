<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Ethical Sartorialist</title>
        <link rel="stylesheet" type="text/css" href="{{ asset( mix('css/app.css') ) }}" />
    </head>
    <body class="bg-grey-lightest">
        <div id="app">
            @include ('_layouts.navigation')
            <main class="main-content">
                @section ('content')
                    <div class="container -mx-4">
                        <div class="flex flex-wrap">
                            <div class="w-full">
                                @yield ('top-content')
                            </div>
                            <div class="w-full px-4">
                                @yield ('left-content')
                            </div>
                            <div class="w-full px-4">
                                @section ('right-content')
                                    @include ('_layouts.sidebar')
                                @show
                            </div>
                        </div>
                    </div>
                @show
            </main>
        </div>
        <script type="text/javascript" src="{{ asset( mix('js/app.js') ) }}"></script>
    </body>
</html>
