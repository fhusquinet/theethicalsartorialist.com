@extends ('app')

@section ('top-content')
    @component ('_components.header')
        @slot ('title')
            Articles with the tag "{{ $tag->name }}"
        @endslot
    @endcomponent
@endsection

@section ('content')
    <div class="flex flex-wrap -mx-4">
        @foreach ( $articles as $article )
            <div class="w-full md:w-1/2 px-4 mb-8">
                @include ('_cards.article')
            </div>
        @endforeach
    </div>
@endsection