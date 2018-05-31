@php 
    $id = rand(1, 3);
@endphp

<div class="relative card card__image card--article {{ $class ?? '' }} group shadow hover:shadow-blur transition--fast">
    
    <a href="{{ url('/article') }}" class="absolute pin">Article title</a>
    
    <div class="card__image card--article__image relative overflow-hidden">
        <div class="card__image__background bg-cover bg-center transition--fast b-lazy" data-src="{{ asset('images/articles/'.$id.'.jpg') }}" style="background-image: url({{ asset('images/articles/'.$id.'-blur.jpg') }})"></div>
        <div class="absolute pin bg-primary opacity-0 group-hover:opacity-50 transition--fast"></div>
        <a href="{{ url('category') }}" class="absolute no-underline text-white bg-primary hover:bg-primary-dark pin-b pin-l py-2 px-4 z-20">Category</a>
    </div>

    <div class="pt-6 pb-2 px-6 card__content card--article__content {{ $classContent ?? 'bg-white' }}">
        <h2 class="font-thin text-grey-dark text-2xl md:text-xl text-center mb-4 pb-2 group-hover:text-primary transition--fast relative">
            Article #{{ $id }}
            <span class="absolute pin-center-x pin-b border-b border-grey-light" style="max-width: 100px; width: 100%;"></span>
        </h2>
        <p class="font-thin text-grey text-base md:text-sm mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit accusantium eveniet suscipit, commodi velit doloremque doloribus officia eum ipsam hic saepe ipsum id exercitationem dolore et totam, ducimus ex voluptate fugit quam recusandae consectetur temporibus amet. Nisi eum ut laborum, nam ducimus vitae odio, minima, voluptatibus magnam ipsum blanditiis voluptate.</p>
    </div>

    <div class="py-4 px-6 border-t border-grey-lighter card__footer card--article__footer {{ $classFooter ?? 'bg-white' }}">
        <div class="text-base md:text-sm font-thin text-grey-dark clearfix">
            <div class="block group-hover:text-primary md:inline md:float-left transition--fast mb-4 md:mb-0">
                <img class="inline h-4 w-4 opacity-50 align-text-top mr-1 b-lazy" data-src="{{ asset('icons/hourglass.svg') }}" alt="Article estimated reading time"/>
                6 min. read
            </div>
            <div class="block group-hover:text-primary md:inline md:float-right transition--fast">
                <img class="inline h-4 w-4 opacity-50 align-text-top mr-1 b-lazy" data-src="{{ asset('icons/calendar.svg') }}" alt="Article date" />
                December 28, 2017
            </div>
        </div>
    </div>

</div>