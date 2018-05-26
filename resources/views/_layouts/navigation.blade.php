<nav class="bg-white fixed pin-t pin-x shadow">
    <div class="container px-4">
        <div class="flex items-center justify-between flex-wrap">
            <div class="lex items-center flex-no-shrink mr-4">
                <a href="{{ url('/') }}" class="py-4 inline-block">
                    <img src="{{ asset('logo.svg') }}" class="h-8" />
                </a>
            </div>
            <div class="flex items-center w-auto md:hidden">
                <a href="#" class="py-4">
                    <img src="{{ asset('icons/hamburger.svg') }}" class="h-8" />
                </a>
            </div>
            <div class="items-center w-auto hidden md:flex">
                <a href="#responsive-header" class="block py-6 lg:inline-block lg:mt-0 text-grey-dark hover:text-primary-darker ml-4 no-underline">
                    Docs
                </a>
                <a href="#responsive-header" class="block py-6 lg:inline-block lg:mt-0 text-grey-dark hover:text-primary-darker ml-4 no-underline">
                    Examples
                </a>
                <a href="#responsive-header" class="block py-6 lg:inline-block lg:mt-0 text-grey-dark hover:text-primary-darker ml-4 no-underline">
                    Blog
                </a>
            </div>
        </div>
    </div>
</nav>