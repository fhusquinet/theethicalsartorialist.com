<nav class="main-navigation bg-white fixed pin-t pin-x @if ( ! isset($noNavigationShadow) ) border-b border-grey-lighter @endif z-40">
    <div class="container px-8">
        <div class="flex items-center justify-between flex-wrap">
            <div class="flex items-center w-auto lg:hidden">
                <a href="#" class="py-4">
                    <img src="{{ asset('icons/hamburger.svg') }}" class="h-6 js-trigger" data-element="off-canvas-navigation" alt="Menu" />
                </a>
            </div>
            <div class="flex items-center flex-no-shrink">
                <a href="{{ route('homepage') }}" class="py-4 inline-block">
                    <img src="{{ asset('logo.svg') }}" class="h-8" alt="The Ethical Sartorialist" />
                </a>
            </div>
            <div class="flex items-center w-auto lg:hidden">
                <a href="#" class="py-4 js-trigger" data-element="searching">
                    <img src="{{ asset('icons/search.svg') }}" class="h-6" alt="Menu" />
                </a>
            </div>
            <div class="navigation items-center w-auto hidden lg:flex">
                @foreach ( navigation() as $link )
                    <a href="{{ $link['url'] }}" class="navigation__item block align-middle py-6 lg:inline-block lg:mt-0 font-thin text-grey-darker hover:text-primary-darker transition--fast ml-4 px-2 no-underline">
                        {{ $link['text'] }}
                    </a>
                @endforeach
                <a href="#" class="py-4 ml-8 align-middle block lg:inline-block opacity-75 transition--fast hover:opacity-100 js-trigger" data-element="searching">
                    <img src="{{ asset('icons/search.svg') }}" class="h-5" alt="Menu" />
                </a>
            </div>
        </div>
    </div>
</nav>