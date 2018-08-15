<div class="card card--article {{ $class ?? '' }} bg-white group shadow transition--fast relative">
    
    <div class="card__image card--article__image relative overflow-hidden">
        [image id="{{ $article->getImageId() }}" class="card__image__background img-cover b-lazy"]
        <div class="absolute pin-b pin-center-x  opacity-0 group-hover:opacity-100 w-full z-1 transition--fast text-center">
            <span class="block text-white font-thin text-sm opacity-75 pb-0 group-hover:pb-4 z-2 relative transition--fast">July 13th 2018</span>
        </div>
        <div class="absolute pin bg-black opacity-0 group-hover:opacity-50 transition--fast"></div>
        @if ( $article->category() )
            <a href="{{ $article->category()->getUrl() }}" class="absolute opacity-0 group-hover:opacity-100 no-underline text-white bg-primary hover:bg-primary-dark pin-b pin-l py-2 px-4 z-20 transition--fast -mb-4 group-hover:mb-0">
                {{ $article->category()->title }}
            </a>
        @endif
    </div>

    <div class="card__content-container {{ $classContent ?? '' }}">
        <div class="pt-6 pb-2 px-6 card__content card--article__content {{ $classContent ?? '' }}">
            <h2 class="card__content__title font-normal text-grey-dark text-xl mb-2 group-hover:text-grey-darker transition--fast relative">
                {{ $article->title }}
            </h2>
            <p class="font-thin text-grey-dark text-base md:text-sm mb-4 leading-normal">
                {{ $article->preview_text }} <a href="{{ $article->getUrl() }}" class="ml-2 inline-block no-underline text-primary"><span class="inline-block pb-05 border-b border-primary">Read more</span> ></a>
            </p>
            <p class="font-thin text-grey-light mb-4 text-sm md:text-xs">
                {{ $article->date() }}
            </p>
        </div>
    </div>

    <a href="{{ $article->getUrl() }}" class="absolute pin text-transparent">{{ $article->title }}</a>

</div>