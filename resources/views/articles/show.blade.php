@extends ('app')

@section ('left-content')
    <div class="mb-20 bg-white">

        <div class="card__image card--article__image relative overflow-hidden">
            <img class="card__image__background absolute transition--fast b-lazy img-cover" data-src="{{ asset('images/articles/1.jpg') }}" src="{{ asset('images/articles/1-blur.jpg') }}" />
            <div class="absolute pin bg-primary opacity-0 group-hover:opacity-50 transition--fast"></div>
            <a href="{{ url('category') }}" class="absolute no-underline text-white bg-primary hover:bg-primary-dark pin-b pin-l py-2 px-4 z-20">Category</a>
        </div>

        <div class="px-6">
            <h1 class="card__content__title font-thin text-grey-dark text-2xl text-center mb-4 pt-6 pb-2 group-hover:text-primary transition--fast relative">
                Article title
            </h1>
            <div class="py-4 px-6 border-t border-b border-grey-lighter mb-4">
                <div class="text-base font-thin text-grey-dark clearfix">
                    <div class="block group-hover:text-primary md:inline md:float-left transition--fast mb-4 md:mb-0">
                        <img class="inline h-4 w-4 opacity-50 align-text-top mr-1" src="{{ asset('icons/hourglass.svg') }}" alt="Article estimated reading time"/>
                        6 min. read
                    </div>
                    <div class="block group-hover:text-primary md:inline md:float-right transition--fast">
                        <img class="inline h-4 w-4 opacity-50 align-text-top mr-1" src="{{ asset('icons/calendar.svg') }}" alt="Article date" />
                        December 28, 2017
                    </div>
                </div>
            </div>
            <p class="font-thin text-grey-dark text-base mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora obcaecati corporis aspernatur voluptate reprehenderit, ipsa dolor a nobis eos nisi aut tenetur, eligendi consequatur maiores totam molestiae optio non voluptatem dolorum porro vitae saepe! Enim non quam labore tempora, voluptatum ut consequatur? Velit vel quo, at nostrum voluptatem eum iure culpa. Quidem deleniti illum aliquam similique amet velit voluptatem possimus culpa perferendis aliquid nulla voluptate, quod asperiores omnis iure nemo?</p>
            <p class="font-thin text-grey-dark text-base mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit porro, voluptatem quasi non aut illo qui odit ratione dolorum.</p>
            <img class="block w-full b-lazy mb-2" data-src="{{ asset('images/articles/1.jpg') }}" src="{{ asset('images/articles/1-blur.jpg') }}" />
            <p class="font-thin text-grey text-sm text-center mb-8">Image description</p>
            <p class="font-thin text-grey-dark text-base mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae.</p>
            <img class="block w-full b-lazy mb-2" data-src="{{ asset('images/articles/1.jpg') }}" src="{{ asset('images/articles/1-blur.jpg') }}" />
            <p class="font-thin text-grey text-sm text-center mb-8">Image description</p>
            <div class="flex flex-wrap -mx-1 gallery">
                @for ( $i = 0; $i < 4; $i++ )
                    <a class="w-full md:w-1/2 p-1" href="{{ asset('images/articles/1.jpg') }}" data-caption="Image {{ $i }}">
                        <div class="square block">
                            <img class="img-cover b-lazy" data-src="{{ asset('images/articles/1.jpg') }}" src="{{ asset('images/articles/1-blur.jpg') }}" />
                        </div>
                    </a>
                @endfor
            </div>
            <p class="font-thin text-grey text-sm text-center mb-8">The gallery description</p>
            <p class="font-thin text-grey-dark text-base mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae.</p>
            <p class="font-thin text-grey-dark text-base mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae.</p>
            <p class="font-thin text-grey-dark text-base mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae.</p>
            <div class="flex flex-wrap -mx-2">
                <div class="mb-6 w-full md:w-1/2 px-2">
                    <img class="b-lazy w-full" data-src="{{ asset('images/lookbook.jpg') }}" src="{{ asset('images/lookbook-blur.jpg') }}" />
                </div>
                <div class="mb-6 w-full md:w-1/2 pl-6 pr-2">
                    <h2 class="font-black text-grey-darkest text-5xl mb-4 relative">
                        Classic Lookbook
                    </h2>
                    <p class="font-thin text-xl text-grey-darker mb-4">
                        Shirt:
                        <span class="font-bold">Howards</span>
                    </p>
                    <p class="font-thin text-xl text-grey-darker mb-4">Pants: <span class="font-bold">Luxire</p>
                    <p class="font-thin text-xl text-grey-darker mb-4">Shoes: <span class="font-bold">Buttero</p>
                </div>
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

    <div class="mb-20">
        <h3 class="font-thin text-grey-dark text-2xl text-center mb-6 group-hover:text-primary transition--fast relative">
            More articles in this category
        </h3>
        @for ( $i = 0; $i < 3; $i++ )
            @include ('_cards.article', ['class' => 'mb-8'])
        @endfor
    </div>
@endsection