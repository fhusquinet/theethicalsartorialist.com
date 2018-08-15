@extends ('app')

@section ('top-content')
    @component ('_components.header', ['padding' => 'py-16', 'image' => $category->getImageId()])
        @slot ('title')
            {{ $category->title }}
        @endslot
    @endcomponent
@endsection

@section ('content')
    @include ('_partials.articles-list')
@endsection