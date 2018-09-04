<div class="relative {{ $class ?? 'bg-white' }}">
    <div class="w-full md:w-2/5 h-64 md:h-auto overflow-hidden relative md:absolute md:pin-b md:pin-t md:pin-l">
        {!! $image !!}
    </div>
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full md:w-2/5"></div>
            <div class="w-full md:w-3/5">
                <div class="md:pl-8 lg:pl-12">
                    <div class="py-24">
                        {!! $text ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>