@php 
    $id = rand(1, 3);
    if ( ! isset($big) ) {
        $big = false;
    }
@endphp

<div class="card card--article @if ( $big ) card--big clearfix @endif {{ $class ?? '' }} bg-white rounded-lg group shadow transition--fast relative">
    
    <div class="card__image card--article__image relative overflow-hidden rounded-t-lg">
        [image id="3" class="card__image__background img-cover"]
        <div class="absolute pin-b pin-center-x  opacity-0 group-hover:opacity-100 w-full z-1 transition--fast text-center">
            <span class="block text-white font-thin text-sm opacity-75 pb-0 group-hover:pb-4 z-2 relative transition--fast">July 13th 2018</span>
        </div>
        <div class="absolute pin bg-black opacity-0 group-hover:opacity-50 transition--fast"></div>
        <a href="{{ url('category') }}" class="absolute opacity-0 group-hover:opacity-100 no-underline text-white bg-primary hover:bg-primary-dark pin-b pin-l py-2 px-4 z-20 transition--fast -mb-4 group-hover:mb-0">Category</a>
    </div>

    <div class="card__content-container rounded-b-lg {{ $classContent ?? '' }}">
        <div class="pt-6 pb-2 px-6 card__content card--article__content {{ $classContent ?? '' }}">
            <h2 class="card__content__title font-normal text-grey-dark text-xl mb-2 group-hover:text-grey-darker transition--fast relative">
                Article #{{ $id }}
            </h2>
            <p class="font-thin text-grey-dark text-base md:text-sm mb-6 leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit accusantium eveniet suscipit, commodi velit doloremque doloribus officia eum ipsam hic .</p>
            <a href="{{ url('article') }}" class="mb-4 inline-block no-underline text-white bg-primary group-hover:bg-primary-dark py-2 px-4 transition--fast">Read more</a>
        </div>
    </div>

    <a href="{{ url('/article') }}" class="absolute pin text-transparent">Article title</a>

</div>