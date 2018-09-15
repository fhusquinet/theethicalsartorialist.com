<div class="relative {{ $class ?? 'bg-white' }}">
    <div class="w-full md:w-2/5 h-64 md:h-auto overflow-hidden relative md:absolute md:pin-b md:pin-t md:pin-r">
        {!! $image !!}
    </div>
    <div class="container px-8">
        <div class="flex flex-wrap">
            <div class="w-full md:w-3/5">
                <div class="md:pr-8 lg:pr-12">
                    <div class="py-12 md:py-20 lg:py-24">
                        {!! $text ?? '' !!}
                    </div>
                </div>
            </div>
            <div class="w-full md:w-2/5"></div>
        </div>
    </div>
</div>