@extends ('app')

@section ('top-content')
    @component ('_components.header')
        @slot ('title')
            Articles matching the search "{{ $query }}"
        @endslot
    @endcomponent
@endsection

@section ('content')
    @include ('_partials.articles-list')
@endsection