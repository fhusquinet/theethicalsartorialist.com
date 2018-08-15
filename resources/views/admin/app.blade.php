<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin | The Ethical Sartorialist</title>
        <link rel="stylesheet" type="text/css" href="{{ asset( mix('css/admin.css') ) }}" />
    </head>
    <body class="bg-body relative">
        
        <div class="admin flex flex-row min-h-screen">
            @include ('admin._layouts.sidebar')
            <div class="admin__content relative z-1 flex-grow w-full min-h-full"> 
                <div class="w-full bg-white px-8 py-6 border-b border-grey-lightest">
                    <div class="text-base font-normal uppercase text-grey-dark">
                        @yield ('title')
                    </div>
                </div>  
                <div class="p-12">
                    @yield ('content')
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="{{ asset( mix('js/admin.js') ) }}"></script>
    </body>
</html>
