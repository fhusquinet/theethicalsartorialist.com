@extends ('app')

@section ('top-content')
    @component ('_components.header', ['image' => $article->getImageId()])
        @slot ('title')
            {{ $article->title }}
        @endslot
        
        @if ( $article->category() )
            @slot ('subtitle')
                <a href="{{ $article->category()->getUrl() }}" class="text-white no-underline hover:underline">{{ $article->category()->title }}</a>
            @endslot
        @endif

        @slot ('footer')
            <div class="relative z-10">
                <div class="container py-4 px-8">
                    <div class="text-base md:text-sm font-thin text-grey clearfix">
                        <div class="relative z-10 block md:inline md:float-left transition--fast mb-4 md:mb-0">
                            <img class="inline h-4 w-4 align-text-top mr-1" src="{{ asset('icons/hourglass--white.svg') }}" alt="Article estimated reading time"/>
                            {{ $article->reading_time }} min. read
                        </div>
                        <div class="relative z-10 block md:inline md:float-right transition--fast">
                            <img class="inline h-4 w-4 align-text-top mr-1" src="{{ asset('icons/calendar--white.svg') }}" alt="Article date" />
                            {{ $article->date() }}
                        </div>
                    </div>
                </div>
                <div class="absolute pin bg-black opacity-25 z-2"></div>
            </div>
        @endslot
    @endcomponent
@endsection

@section ('content')
    <div class="mb-10 md:pt-4 lg:pt-12 bg-white shadow">

        {!! $article->text !!}
        
        <div class="pt-4 px-8 border-t border-grey-lighter">
            <div class="text-left flex flex-wrap">
                @foreach ( $article->tags as $tag )
                    <a href="{{ route('tags.show', $tag->slug) }}" class="flex px-4 py-2 text-base md:text-sm lg:text-xs bg-grey-lighter mb-4 mr-4 rounded no-underline text-grey-dark hover:bg-primary hover:text-white transition--fast">
                        {{ $tag->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <a href="{{ url('/about') }}" class="block no-underline mb-20 bg-white shadow">
        <div class="flex flex-wrap p-8">
            <div class="w-full sm:w-32 mb-4 sm:mb-0">
                [image id="3" class="b-lazy h-32 w-32 mx-auto block bg-grey-lightest rounded-full"]
            </div>
            <div class="w-full sm:flex-1 sm:pl-8">
                <h3 class="text-xl font-thin text-grey-dark mb-4">
                    Florian Husquinet
                </h3>
                <p class="text-base font-thin text-grey mb-2">
                    I am a web developer currently living in Liege, Belgium. My big resolution for 2018 was to have a more ethical wardrobe.
                </p>
                <p class="text-base font-thin text-grey mb-2">
                    I will explore different options throughout my posts ranging from regular brands to second hand going into the details of what makes a garment ethical or not.
                </p>
            </div>
        </div>
    </a>

    <div class="mb-10">
        <h3 class="font-thin text-grey-dark text-2xl text-center mb-6 group-hover:text-primary transition--fast relative">
            Related articles
        </h3>
        @include ('_partials.articles-list', ['articles' => $otherArticles])
    </div>
@endsection