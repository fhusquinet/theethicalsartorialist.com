<section class="header relative overflow-hidden">
    <div class="{{ $padding ?? 'py-32' }}">
        <div class="container px-8">
            <div class="header__content relative z-10">
                <div class="text-center">
                    <h1 class="text-white @if (isset($button) || isset($subtitle)) mb-4 @endif font-thin">{{ $title }}</h1>
                    @isset ($subtitle)
                        <h2 class="text-white opacity-75 text-base @isset ($button) mb-8 @endisset font-thin">{{ $subtitle }}</h2>
                    @endisset
                    {{ $button ?? '' }}
                </div>
            </div>
        </div>
    </div>

    {{ $footer ?? '' }}
    
    @isset ($image)
        [image id="{{ $image }}" class="header__image img-cover b-lazy"]
    @endisset
    
    <div class="header__mask absolute pin bg-black opacity-75 z-2"></div>
</section>