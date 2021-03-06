@extends ('app')

@section ('top-content')
    @component ('_components.header')
        @slot ('title')
            Articles with the tag "{{ $tag->name }}"
        @endslot
    @endcomponent
@endsection

@section ('content')
    @include ('_partials.articles-list')
@endsection