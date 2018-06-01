<nav class="bg-white fixed pin-t pin-x shadow z-40">
    <div class="container px-4">
        <div class="flex items-center justify-between flex-wrap">
            <div class="flex items-center w-auto md:hidden">
                <a href="#" class="py-4">
                    <img src="{{ asset('icons/hamburger.svg') }}" class="h-6" alt="Menu" />
                </a>
            </div>
            <div class="flex items-center flex-no-shrink">
                <a href="{{ url('/') }}" class="py-4 inline-block">
                    <img src="{{ asset('logo.svg') }}" class="h-8" alt="The Ethical Sartorialist" />
                </a>
            </div>
            <div class="flex items-center w-auto md:hidden">
                <a href="#" class="py-4 js-trigger" data-element="searching">
                    <img src="{{ asset('icons/search.svg') }}" class="h-6" alt="Menu" />
                </a>
            </div>
            <div class="items-center w-auto hidden md:flex">
                <a href="#responsive-header" class="block align-middle py-6 lg:inline-block lg:mt-0 text-grey-dark hover:text-primary-darker transition--fast ml-4 no-underline">
                    Docs
                </a>
                <a href="#responsive-header" class="block align-middle py-6 lg:inline-block lg:mt-0 text-grey-dark hover:text-primary-darker transition--fast ml-4 no-underline">
                    Examples
                </a>
                <a href="#responsive-header" class="block align-middle py-6 lg:inline-block lg:mt-0 text-grey-dark hover:text-primary-darker transition--fast ml-4 no-underline">
                    Blog
                </a>
                <a href="#" class="py-4 ml-8 align-middle block lg:inline-block opacity-50 transition--fast hover:opacity-100 js-trigger" data-element="searching">
                    <img src="{{ asset('icons/search.svg') }}" class="h-5" alt="Menu" />
                </a>
            </div>
        </div>
    </div>
</nav>