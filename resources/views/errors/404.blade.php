@php
    $noNavigationShadow = true;
@endphp

@extends ('app')

@section ('main')
    @component ('_components.empty-card', [
        'image' => asset('icons/404.svg'),
        'containerClass' => ''
    ])
        
        @slot ('title')
            404
        @endslot
        
        @slot ('subtitle')
            Looks like you are lost :(
        @endslot
        
        @slot ('text')
            Don't worry, you can always come back to the <a href="{{ route('homepage') }}" class="font-normal text-primary hover:text-primary-dark">homepage</a> or use the search below to find what you want!
        @endslot
        
        @include ('_partials.search-form')

        @slot ('after')
            <div class="bg-body">
                <div class="container px-4 pt-16 pb-8">
                    <h2 class="text-grey-dark text-center text-2xl sm:text-3xl leading-tight font-thin mb-8">Latest articles</h2>
                    @include ('_partials.articles-list', [
                        'articles' => get_latest_articles(3),
                        'articleClass' => 'w-full md:w-1/3 px-4 mb-8'
                    ])
                </div>
            </div>
        @endslot
    @endcomponent
@endsection