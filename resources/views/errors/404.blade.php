@php
    $noNavigationShadow = true;
@endphp

@extends ('app')

@section ('main')
    @component ('_components.empty-card', ['image' => asset('icons/404-2.svg')])
        @slot ('title')
            404
        @endslot
        @slot ('subtitle')
            Looks like you are lost :(
        @endslot
        @slot ('text')
            Don't worry, you can always come back to the <a href="{{ route('homepage') }}" class="font-normal text-primary hover:text-primary-dark">homepage</a> or use the search below to find what you want!
        @endslot
        @include ('_partials.search-form')
    @endcomponent
@endsection