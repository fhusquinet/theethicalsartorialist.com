<div class="off-canvas-navigation fixed pin z-50">
    <div class="container relative">
        <a href="#" class="absolute pin-t pin-l p-4 z-50 js-trigger" data-element="off-canvas-navigation">
            <img src="{{ asset('icons/close--white.svg') }}" alt="Close Menu Icon" class="opacity-75 hover:opacity-100 h-8 w-8 transition--fast" />
        </a>
    </div>
    <div class="absolute pin-center-y pin-l pin-r z-50">
        <div class="container px-12 max-w-md">
            <ul class="list-reset">
                <li><a href="{{ route('homepage') }}" class="text-grey-lightest hover:text-primary relative transition--fast text-2xl md:text-4xl font-normal py-2 px-4 my-1 no-underline block md:inline-block">Home</a></li>
                <li><a href="{{ route('articles.index') }}" class="text-grey-lightest hover:text-primary relative transition--fast text-2xl md:text-4xl font-normal py-2 px-4 my-1 no-underline block md:inline-block">Latest Articles</a></li>
                <li><a href="" class="text-grey-lightest hover:text-primary relative transition--fast text-2xl md:text-4xl font-normal py-2 px-4 my-1 no-underline block md:inline-block">Why buying ethical?</a></li>
                <li><a href="" class="text-grey-lightest hover:text-primary relative transition--fast text-2xl md:text-4xl font-normal py-2 px-4 my-1 no-underline block md:inline-block">About</a></li>
                <li><a href="" class="text-grey-lightest hover:text-primary relative transition--fast text-2xl md:text-4xl font-normal py-2 px-4 my-1 no-underline block md:inline-block">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="overlay absolute pin bg-primary-darkest opacity-95 z-40"></div>
</div>