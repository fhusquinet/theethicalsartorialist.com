<div class="searching fixed pin z-50">
    <div class="container relative">
        <a href="#" class="absolute pin-t pin-r m-4 z-50 js-trigger" data-element="searching">
            <img src="{{ asset('icons/close--white.svg') }}" alt="Close search icon" class="opacity-75 hover:opacity-100 h-8 w-8 transition--fast" />
        </a>
    </div>
    <div class="absolute pin-center-y pin-l pin-r z-50">
        <div class="container px-12 max-w-md">
            @include ('_partials.search-form', [
                'inputSize' => 'py-4 pr-8 pl-16'
            ])
        </div>
    </div>
    <div class="absolute pin bg-primary-darkest opacity-95 z-40"></div>
</div>