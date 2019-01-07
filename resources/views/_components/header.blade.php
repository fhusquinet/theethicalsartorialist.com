<div class="py-16 md:py-20 lg:py-24 bg-white border-b border-grey-lighter">
    <div class="container px-8">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-2/3">
                <h1 class="text-grey-darkest font-thin mb-4">
                    {{ $title }}
                </h1>
                @if ( isset($text) && ! empty($text) )
                    <p class="text-grey-darker font-thin">
                        {{ $text }}
                    </p>
                @endif
            </div>
        </div>
    </div>
</div>