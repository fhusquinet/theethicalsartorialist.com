@extends ('app')

@if ( $featuredArticle )
    @section ('top-content')
        @component ('_components.header', ['image' => $featuredArticle->getImageId()])
            
            @slot ('title')
                {{ $featuredArticle->title }}
            @endslot
            
            @slot ('subtitle')
                {{ $featuredArticle->preview_text }}
            @endslot

            @slot ('button')
                <a href="{{ $featuredArticle->getUrl() }}" class="button button--white button--ghost inline-block transition--fast">Read now</a>
            @endslot
            
        @endcomponent
    @endsection
@endif

@section ('content')
    @include ('_partials.articles-list')
@endsection