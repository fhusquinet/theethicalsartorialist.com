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

        @if ( isset($meta['description']) && !empty($meta['description']) )
            <meta name="description" content="{{ $meta['description'] }}">
        @else
            <meta name="description" content="An ethical approach to the sartorial style, made simple and accessible to everyone.">
        @endif

        @if ( isset($meta['keywords']) && !empty($meta['keywords']) )
            <meta name="keywords" content="{{ $meta['keywords'] }}">
        @else
            <meta name="keywords" content="Ethical fashion, sartorial, review, blog, articles, mode, menswear, style, men style">
        @endif

        @if ( isset($meta['og:title']) && !empty($meta['og:title']) )
            <meta property="og:title" content="{{ $meta['og:title'] }}">
        @else
            <meta property="og:title" content="The Ethical Sartorialist - Ethical fashion with a sartorial touch made simple">
        @endif

        @if ( isset($meta['og:url']) && !empty($meta['og:url']) )
            <meta property="og:url" content="{{ $meta['og:url'] }}">
        @else
            <meta property="og:url" content="{{ url()->current() }}">
        @endif

        @if ( isset($meta['og:image']) && !empty($meta['og:image']) )
            <meta property="og:image" content="{{ asset($meta['og:image']) }}">
        @else
            <meta property="og:image" content="{{ asset('images/meta/og.jpg') }}">
        @endif

        @if ( isset($meta['og:description']) && !empty($meta['og:description']) )
            <meta property="og:description" content="{{ $meta['og:description'] }}">
        @else
            <meta property="og:description" content="An ethical approach to the sartorial style, made simple and accessible to everyone.">
        @endif

        <meta property="og:type" content="website">
        <meta property="og:locale" content="en">
        <meta property="og:site_name" content="{{ config('app.name') }}">

        @if ( isset($meta['title']) && ! empty($meta['title']) )
            <title>{{ $meta['title'] }} — The Ethical Sartorialist</title>
        @else
            <title>The Ethical Sartorialist - Ethical fashion with a sartorial touch made simple</title>
        @endif
        
        
        <link rel="stylesheet" type="text/css" href="{{ asset( mix('css/app.css') ) }}" />
    </head>
    <body class="bg-body relative">
        
        @include ('_layouts.navigation')
        
        @section ('main')
            <main class="main-content">
                @yield ('top-content')
                @section ('content-container')
                    <div class="container main-container px-8 py-8">
                        @yield ('content')
                    </div>
                @show
            </main>
        @show

        @include ('_layouts.footer')
        
        @include ('_layouts.search-form')
        
        @include ('_layouts.off-canvas-navigation')
        
        <script type="text/javascript" src="{{ asset( mix('js/app.js') ) }}"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126245303-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-126245303-1');
        </script>

    </body>
</html>
