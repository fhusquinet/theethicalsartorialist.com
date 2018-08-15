<form action="{{ route('search') }}" class="w-full">
    <div class="flex relative">
        <input
            id="search-input"
            class="transition focus:outline-0 border border-white focus:bg-white focus:border-grey-light placeholder-grey-darkest rounded bg-grey-lighter {{ $inputSize ?? 'py-2 pr-4 pl-12' }} block w-full appearance-none leading-normal ds-input focus:outline-none"
            placeholder="Your query"
            name="query"
            @isset ( $query) value="{{ $query }}" @endisset
        />
        <button class="absolute pin-l pin-t pin-b inline-flex searching__form__submit w-12">
            <img src="{{ asset('icons/search.svg') }}" alt="Submit search button" class="opacity-25 hover:opacity-50 h-6 w-6 mx-auto transition--fast" />
        </button>
    </div>
</form>