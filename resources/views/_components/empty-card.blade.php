<div class="bg-white min-h-screen pt-navigation relative">
    <div class="{{ $containerClass ?? 'absolute pin-center-y pin-l pin-r' }}">
        <div class="container px-4 py-32">
            <div class="flex flex-col md:flex-row-reverse -mx-4">
                <div class="w-full md:w-1/2 md:pl-12 px-4 text-center md:text-left">
                    
                    @isset ($title)
                        <h1 class="text-primary-dark inline-block mb-4 sm:mb-12 md:mb-6 text-8xl sm:text-12xl md:text-8xl lg:text-12xl font-bold">
                            {{ $title }}
                        </h1>
                    @endisset
                    
                    @isset ($subtitle)
                        <h2 class="text-grey-dark text-2xl sm:text-3xl leading-tight font-bold mb-4 sm:mb-6 md:mb-4">
                            {{ $subtitle }}
                        </h2>
                    @endisset
                    
                    @isset ($text)
                        <p class="text-grey font-thin mb-8 leading-tight">
                            {{ $text }}
                        </p>
                    @endisset

                    {{ $slot ?? '' }}
                </div>
                <div class="hidden md:block w-full md:w-1/2 px-4 lg:pr-24">
                    <img src="{{ $image ?? asset('icons/sad.svg') }}" class="w-full h-full mx-auto block" alt="{{ $title ?? ':(' }}" />
                </div>
            </div>
        </div>
        @isset ($after)
            {{ $after }}
        @endisset
    </div>
</div>