@php
    if ( $articles->isEmpty() ) {
        $noNavigationShadow = true;
    }
    $meta = [
        'title'    => 'Search',
        'og:title' => 'Search'
    ];
    if ( ! empty($query) ) {
        $meta['title'] = $meta['og:title'] = 'Search results for ' . $query;
    }
@endphp

@extends ('app')

@if ( $articles->isNotEmpty() )
    @section ('top-content')
        @component ('_components.header')
            @slot ('title')
                Articles matching the search "{{ $query }}"
            @endslot
            
            @slot ('text')
                You can always start a new search in case these results do not satisty your needs
            @endslot
        @endcomponent
    @endsection

    @section ('content')
        @include ('_partials.articles-list')
    @endsection
@else
    @section ('main')
        @component ('_components.empty-card')
            @slot ('subtitle')
                Couldn't find any article matching the search "{{ $query }}"
            @endslot
            @slot ('text')
                Try a new search
            @endslot
            @include ('_partials.search-form', ['query' => $query])
        @endcomponent
    @endsection
@endif