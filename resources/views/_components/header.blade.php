<section class="header relative overflow-hidden">
    <div class="py-20 md:py-24 lg:py-32">
        <div class="container px-4">
            <div class="header__content relative z-10">
                <div class="text-center">
                    <h1 class="text-white @isset ($button) mb-8 @endisset font-thin">{{ $title }}</h1>
                    {{ $button ?? '' }}
                </div>
            </div>
        </div>
    </div>
    {{ $footer ?? '' }}
    <img class="header__image img-cover b-lazy z-1" src="{{ $imageBlur }}" data-src="{{ $image }}" />
    <div class="header__mask absolute pin bg-black opacity-75 z-2"></div>
</section>