<nav class="main-navigation bg-white fixed pin-t pin-x @if ( ! isset($noNavigationShadow) ) shadow @endif z-40">
    <div class="container px-4">
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
            <div class="items-center w-auto hidden lg:flex">
                <a href="{{ url('/') }}" class="block align-middle py-6 lg:inline-block lg:mt-0 font-thin text-grey-dark hover:text-primary-darker transition--fast ml-4 no-underline">
                    Home
                </a>
                <a href="{{ url('/content') }}" class="block align-middle py-6 lg:inline-block lg:mt-0 font-thin text-grey-dark hover:text-primary-darker transition--fast ml-4 no-underline">
                    Contact
                </a>
                <a href="#" class="py-4 ml-8 align-middle block lg:inline-block opacity-50 transition--fast hover:opacity-100 js-trigger" data-element="searching">
                    <img src="{{ asset('icons/search.svg') }}" class="h-5" alt="Menu" />
                </a>
            </div>
        </div>
    </div>
</nav>