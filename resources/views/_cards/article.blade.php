<div class="card card--article {{ $class ?? '' }} bg-white group shadow transition--fast relative pb-12">
    
    <div class="card__image card--article__image relative overflow-hidden">
        [image id="{{ $article->getPreviewImageId() }}" class="card__image__background img-cover b-lazy"]
        <div class="absolute pin bg-black opacity-0 group-hover:opacity-50 transition--fast"></div>
        @if ( $article->category() )
            <a href="{{ $article->category()->getUrl() }}" class="absolute opacity-0 group-hover:opacity-100 no-underline text-white bg-primary hover:bg-primary-dark pin-b pin-l py-2 px-4 z-20 transition--fast -mb-4 group-hover:mb-0">
                {{ $article->category()->title }}
            </a>
        @endif
    </div>

    <div class="card__content-container {{ $classContent ?? '' }}">
        <div class="pt-6 px-6 card__content card--article__content {{ $classContent ?? '' }}">
            <h2 class="card__content__title font-thin text-grey-darker text-xl mb-2 group-hover:text-grey-darkest transition--fast relative">
                {{ $article->title }}
            </h2>
            <p class="font-thin text-grey-darker text-base md:text-sm leading-normal">
                {{ $article->preview_text }} <a href="{{ $article->getUrl() }}" class="ml-2 inline-block no-underline text-primary"><span class="inline-block pb-05 border-b border-primary">Read more</span> ></a>
            </p>
        </div>
    </div>

    <div class="absolute py-4 px-6 pin-x pin-b">
        <p class="font-thin text-grey text-sm md:text-xs">
            {{ $article->date() }}
        </p>
    </div>

    <a href="{{ $article->getUrl() }}" class="absolute pin text-transparent">{{ $article->title }}</a>

</div>