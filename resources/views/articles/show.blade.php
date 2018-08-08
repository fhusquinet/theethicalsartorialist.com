@extends ('app')

@section ('top-content')
    @component ('_components.header', ['image' => asset('images/articles/1.jpg'), 'imageBlur' => asset('images/articles/1-blur.jpg')])
        @slot ('title')
            Asket: Great basics for an ethical wardrobe
        @endslot
        @slot ('subtitle')
            <a href="{{ url('/category') }}" class="text-white no-underline hover:underline">Ethical Brands</a>
        @endslot
        @slot ('footer')
            <div class="relative z-10">
                <div class="container py-4 px-8">
                    <div class="text-base md:text-sm font-thin text-grey clearfix">
                        <div class="relative z-10 block md:inline md:float-left transition--fast mb-4 md:mb-0">
                            <img class="inline h-4 w-4 align-text-top mr-1" src="{{ asset('icons/hourglass--white.svg') }}" alt="Article estimated reading time"/>
                            6 min. read
                        </div>
                        <div class="relative z-10 block md:inline md:float-right transition--fast">
                            <img class="inline h-4 w-4 align-text-top mr-1" src="{{ asset('icons/calendar--white.svg') }}" alt="Article date" />
                            December 28th, 2017
                        </div>
                    </div>
                </div>
                <div class="absolute pin bg-black opacity-25 z-2"></div>
            </div>
        @endslot
    @endcomponent
@endsection

@section ('content')
    <div class="mb-10 bg-white rounded-lg shadow">

        {!! $article->text !!}
        
        <div class="pt-4 px-8 border-t border-grey-lighter">
            <div class="text-left flex flex-wrap">
                @for ( $i = 0; $i < 3; $i++ )
                    <a href="{{ url('/tag-' . $i) }}" class="flex px-4 py-2 text-base md:text-sm lg:text-xs bg-grey-lighter mb-4 mr-4 rounded no-underline text-grey-dark hover:bg-primary hover:text-white hover:shadow transition--fast">Tag {{ $i + 1 }}</a>
                @endfor
            </div>
        </div>
    </div>

    <a href="{{ url('/about') }}" class="block no-underline mb-20 bg-white rounded-lg shadow">
        <div class="flex flex-wrap p-8">
            <div class="w-full sm:w-32 mb-4 sm:mb-0">
                <img class="h-32 w-32 mx-auto block bg-grey-lightest rounded-full b-lazy" data-src="{{ asset('images/avatar.jpg') }}" src="{{ asset('images/avatar-blur.jpg') }}" alt="About me" />
            </div>
            <div class="w-full sm:flex-1 sm:pl-8">
                <h3 class="text-xl md:text-base font-thin text-grey-dark mb-4">About me</h3>
                <p class="text-base md:text-sm font-thin text-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ipsum ad delectus sunt ex aliquam possimus soluta libero. Consectetur consequuntur et aliquam non vitae consequatur eveniet quidem nulla officia tempore, ut minus expedita odit repellendus sapiente distinctio harum minima labore mollitia, quis adipisci. Ducimus quibusdam ea excepturi, error qui, vitae.
            </div>
        </div>
    </a>

    <div class="mb-10">
        <h3 class="font-thin text-grey-dark text-2xl text-center mb-6 group-hover:text-primary transition--fast relative">
            Related articles
        </h3>
        @for ( $i = 0; $i < 3; $i++ )
            @include ('_cards.article', ['class' => 'mb-8'])
        @endfor
    </div>
@endsection