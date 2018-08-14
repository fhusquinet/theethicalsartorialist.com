@extends ('app')

@section ('top-content')
    @component ('_components.header', ['image' => $category->getImageId()])
        @slot ('title')
            Articles with the category "{{ $category->title }}"
        @endslot
    @endcomponent
@endsection

@section ('content')
    @include ('_partials.articles-list')
@endsection