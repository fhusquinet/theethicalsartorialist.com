@extends ('app')

@if ( $featuredArticle )
    @section ('top-content')
        @component ('_components.header', ['image' => $featuredArticle->getImageId()])
            @slot ('title')
                {{ $featuredArticle->title }}
            @endslot
            @slot ('button')
                <a href="{{ $featuredArticle->getUrl() }}" class="button button--white button--ghost inline-block transition--fast hover:shadow">Read now</a>
            @endslot
        @endcomponent
    @endsection
@endif

@section ('content')
    <div class="flex flex-wrap -mx-4">
        @foreach ( $articles as $article )
            <div class="w-full md:w-1/2 px-4 mb-8">
                @include ('_cards.article')
            </div>
        @endforeach
    </div>
@endsection