@php
    $noNavigationShadow = true;
@endphp

@extends ('app')

@section ('main')
    <div class="bg-white min-h-screen pt-navigation relative">
        <div class="absolute pin-center-y pin-l pin-r">
            <div class="container px-4">
                <div class="flex flex-col md:flex-row-reverse -mx-4">
                    <div class="w-full md:w-1/2 md:pl-12 px-4 text-center md:text-left">
                        <h1 class="text-primary-dark inline-block mb-4 sm:mb-12 md:mb-6 text-8xl sm:text-12xl md:text-8xl lg:text-12xl font-bold">
                            404
                        </h1>
                        <h2 class="text-grey-dark text-2xl sm:text-3xl leading-tight font-bold mb-4 sm:mb-6 md:mb-4">
                            Looks like you are lost :(
                        </h2>
                        <p class="text-grey font-thin mb-8 leading-tight">
                            Don't worry, you can always come back to the <a href="{{ route('homepage') }}" class="font-normal text-primary hover:text-primary-dark">homepage</a> or use the search below to find what you want!
                        </p> 
                        <form action="{{ route('search') }}" class="w-full">
                            <div class="flex relative">
                                <input id="search-input" class="transition focus:outline-0 border border-white focus:bg-white focus:border-grey-light placeholder-grey-darkest rounded bg-grey-lighter py-2 pr-4 pl-12 block w-full appearance-none leading-normal ds-input focus:outline-none" placeholder="Your query" name="query" />
                                <button class="absolute pin-l pin-t pin-b inline-flex searching__form__submit w-12">
                                    <img src="{{ asset('icons/search.svg') }}" alt="Submit search button" class="opacity-25 hover:opacity-50 h-6 w-6 mx-auto transition--fast" />
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="hidden md:block w-full md:w-1/2 px-4 lg:pr-24">
                        <img src="{{ asset('icons/404-2.svg') }}" class="w-full h-full mx-auto block" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection