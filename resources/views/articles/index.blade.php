@extends ('app')

@section ('top-content')
    @component ('_components.header')
        @slot ('title', 'Latest articles')
        @slot ('text', 'Find my latest articles here')
    @endcomponent
@endsection

@section ('content')
    @include ('_partials.articles-list')
@endsection