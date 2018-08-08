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
                            December 28, 2017
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

        <div class="p-8">
            <div class="text-container mb-10">
                <h2 class="font-thin text-grey-darkest text-2xl mb-6 relative">
                    Introduction
                </h2>
                <p class="font-thin text-grey-dark text-base leading-text mb-6 leading-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora obcaecati corporis aspernatur voluptate reprehenderit, ipsa dolor a nobis eos nisi aut tenetur, eligendi consequatur maiores totam molestiae optio non voluptatem dolorum porro vitae saepe! Enim non quam labore tempora, voluptatum ut consequatur? Velit vel quo, at nostrum voluptatem eum iure culpa. Quidem deleniti illum aliquam similique amet velit voluptatem possimus culpa perferendis aliquid nulla voluptate, quod asperiores omnis iure nemo?</p>
                <p class="font-thin text-grey-dark text-base leading-text mb-6 leading-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit porro, voluptatem quasi non aut illo qui odit ratione dolorum.</p>
            </div>
        </div>
        <div class="gallery">
            <a href="{{ asset('images/articles/1.jpg') }}" data-caption="Image 1">
                <img class="block w-full b-lazy mb-4" data-src="{{ asset('images/articles/1.jpg') }}" src="{{ asset('images/articles/1-blur.jpg') }}" />
            </a>
        </div>
        <p class="font-thin text-grey text-sm text-center mb-4">Image description</p>
        <div class="p-8">
            <div class="text-container mb-10">
                <p class="font-thin text-grey-dark text-base leading-text mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae.</p>
            </div>
        </div>
        <img class="block w-full b-lazy mb-4" data-src="{{ asset('images/articles/1.jpg') }}" src="{{ asset('images/articles/1-blur.jpg') }}" />
        <p class="font-thin text-grey text-sm text-center mb-4">Image description</p>
        <div class="flex flex-wrap gallery mb-4">
            @for ( $i = 1; $i <= 4; $i++ )
                <a class="w-full md:w-1/2 lg:w-1/4 mb-2 md:mb-0" href="{{ asset('images/articles/'.$i.'.jpg') }}" data-caption="Image {{ $i }}">
                    <div class="square block">
                        <img class="img-cover b-lazy" data-src="{{ asset('images/articles/'.$i.'.jpg') }}" src="{{ asset('images/articles/'.$i.'-blur.jpg') }}" />
                    </div>
                </a>
            @endfor
        </div>
        <p class="font-thin text-grey text-sm text-center mb-4 w-full">The gallery description</p>
        <div class="p-8">
            <div class="text-container mb-10">
                <p class="font-thin text-grey-dark text-base leading-text mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae.</p>
                <p class="font-thin text-grey-dark text-base leading-text mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae.</p>
                <p class="font-thin text-grey-dark text-base leading-text mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae.</p>
            </div>
            <div class="pt-4 border-t border-grey-lighter">
                <div class="text-left flex flex-wrap">
                    @for ( $i = 0; $i < 3; $i++ )
                        <a href="{{ url('/tag-' . $i) }}" class="flex px-4 py-2 text-base md:text-sm lg:text-xs bg-grey-lighter mb-4 mr-4 rounded no-underline text-grey-dark hover:bg-primary hover:text-white hover:shadow transition--fast">Tag {{ $i + 1 }}</a>
                    @endfor
                </div>
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
                <p class="text-base md:text-sm font-thin text-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ipsum ad delectus sunt ex aliquam possimus soluta libero. Consectetur consequuntur et aliquam non vitae consequatur eveniet quidem nulla officia tempore, ut minus expedita odit repellendus sapiente distinctio harum minima labore mollitia, quis adipisci. Ducimus quibusdam ea excepturi, error qui, vitae.</p>
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