<div class="searching fixed pin z-50">
    <div class="container relative">
        <a href="#" class="absolute pin-t pin-r m-4 z-50 js-trigger" data-element="searching">
            <img src="{{ asset('icons/close--white.svg') }}" alt="Close search icon" class="opacity-75 hover:opacity-100 h-8 w-8 transition--fast" />
        </a>
    </div>
    <form action="{{ url('search') }}" class="searching__form absolute pin-center z-50">
        <div class="container px-4">
            <div class="flex">
                <label class="invisible" for="search-input">Search</label>
                <input id="search-input" class="flex-1 searching__form__input border-b border-grey-lightest bg-transparent px-4 py-2 text-white block focus:border-white" placeholder="Your query" name="query" />
                <button class="inline-flex ml-4 searching__form__submit w-12">
                    <img src="{{ asset('icons/search--white.svg') }}" alt="Submit search button" class="opacity-75 hover:opacity-100 h-12 w-12 transition--fast" />
                </button>
            </div>
        </div>
    </form>
    <div class="absolute pin bg-grey-darkest opacity-75 z-40"></div>
</div>