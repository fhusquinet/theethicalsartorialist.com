@php
    $meta = [
        'title'    => 'About',
        'og:title' => 'About'
    ];
@endphp

@extends ('app')

@section ('top-content')
    @component ('_components.header')
        @slot ('title', 'About me')
        @slot ('text', "Wonder who's behind this blog?")
    @endcomponent
@endsection

@section ('content-container')
    @component ('pages._partials.section-img-left', ['imageClass' => 'hidden md:block', 'class' => ''])
        @slot ('image')
            [image class="img-cover b-lazy" id=145]
        @endslot
        @slot ('text')
            <h3 class="text-grey-dark font-thin leading-loose mb-4 text-2xl lg:text-3xl">Hi! I'm Florian, nice to meet you :)</h3>
            <p class="text-grey font-thin leading-loose mb-2">
                I am a 24 years old web developer from Liege, Belgium with a great passion for menswear and fashion in general.
            </p>
            <p class="text-grey font-thin leading-loose mb-2">
                While talking with a few friends about fashion and the industry as a whole I realised a lot of misconceptions still existed. Not many people actually realise the impact their wardrobe has on our planet.
            </p>
            <p class="text-grey font-thin leading-loose mb-2">
                That's why I decided to start this blog, as a way to share knowledge and insights on what I consider ethical fashion, with a focus on the sartorial style.
            </p>
        @endslot
    @endcomponent
    <div class="relative bg-white py-12">
        <div class="container px-8">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 py-12 md:border-r md:border-grey-lighter md:pr-12">
                    <p class="text-grey-dark font-thin leading-loose mb-2 text-lg">
                        Starting a more ethical wardrobe was one of the best decision I made, and it's not that hard to do either! So why not start today? I can probably help you :)
                    </p>
                </div>
                <div class="w-full md:w-1/2 py-12 md:pl-12">
                    <p class="text-grey-dark font-thin leading-loose mb-2 text-lg">
                        Even the smallest action towards a more ethical wardrobe makes the difference. Don't worry this is not a place of judgment; only a place full of knowledge and happiness!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection