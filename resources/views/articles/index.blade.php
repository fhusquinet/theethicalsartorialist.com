@extends ('app')

@section ('top-content')
    @component ('_components.header')
        @slot ('title')
            Latest articles
        @endslot
    @endcomponent
@endsection

@section ('content')
    @include ('_partials.articles-list')
@endsection