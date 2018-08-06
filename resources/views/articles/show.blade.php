@extends ('app')

@section ('top-content')
    @component ('_components.header', ['image' => asset('images/articles/1.jpg'), 'imageBlur' => asset('images/articles/1-blur.jpg')])
        @slot ('title')
            Asket: Great basics for an ethical wardrobe
        @endslot
        @slot ('footer')
            <div class="relative z-10">
                <div class="container p-4">
                    <div class="text-base md:text-sm font-thin text-grey clearfix">
                        <div class="relative z-10 block md:inline md:float-left transition--fast mb-4 md:mb-0">
                            <img class="inline h-4 w-4 align-text-top mr-1" src="{{ asset('icons/hourglass--white.svg') }}" alt="Article estimated reading time"/>
                            6 min. read
                        </div>
                        <div class="relative z-10 block md:inline md:float-right transition--fast">
                            <img class="inline h-4 w-4 align-text-top mr-1" src="{{ asset('icons/calendar--white.svg') }}" alt="Article date" />
                            December 28, 2017
                        </div>
                    </div>
                </div>
                <div class="absolute pin bg-black opacity-25 z-2"></div>
            </div>
        @endslot
    @endcomponent
@endsection

@section ('left-content')
    <div class="mb-20 bg-white">

        <div class="p-8">
            <p class="font-thin text-grey-dark text-base mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora obcaecati corporis aspernatur voluptate reprehenderit, ipsa dolor a nobis eos nisi aut tenetur, eligendi consequatur maiores totam molestiae optio non voluptatem dolorum porro vitae saepe! Enim non quam labore tempora, voluptatum ut consequatur? Velit vel quo, at nostrum voluptatem eum iure culpa. Quidem deleniti illum aliquam similique amet velit voluptatem possimus culpa perferendis aliquid nulla voluptate, quod asperiores omnis iure nemo?</p>
            <p class="font-thin text-grey-dark text-base mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit porro, voluptatem quasi non aut illo qui odit ratione dolorum.</p>
            <img class="block w-full b-lazy mb-2" data-src="{{ asset('images/articles/1.jpg') }}" src="{{ asset('images/articles/1-blur.jpg') }}" />
            <p class="font-thin text-grey text-sm text-center mb-8">Image description</p>
            <p class="font-thin text-grey-dark text-base mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae.</p>
            <img class="block w-full b-lazy mb-2" data-src="{{ asset('images/articles/1.jpg') }}" src="{{ asset('images/articles/1-blur.jpg') }}" />
            <p class="font-thin text-grey text-sm text-center mb-8">Image description</p>
            <div class="flex flex-wrap -mx-1 gallery">
                @for ( $i = 0; $i < 4; $i++ )
                    <a class="w-full md:w-1/2 p-1" href="{{ asset('images/articles/1.jpg') }}" data-caption="Image {{ $i }}">
                        <div class="square block">
                            <img class="img-cover b-lazy" data-src="{{ asset('images/articles/1.jpg') }}" src="{{ asset('images/articles/1-blur.jpg') }}" />
                        </div>
                    </a>
                @endfor
            </div>
            <p class="font-thin text-grey text-sm text-center mb-8">The gallery description</p>
            <p class="font-thin text-grey-dark text-base mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae.</p>
            <p class="font-thin text-grey-dark text-base mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae.</p>
            <p class="font-thin text-grey-dark text-base mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam, id nihil consequatur earum ducimus quia laudantium dicta non molestiae.</p>
            <div class="flex flex-wrap mt-16">
                <div class="mb-6 w-full md:w-1/2">
                    <img class="b-lazy w-full" data-src="{{ asset('images/lookbook.jpg') }}" src="{{ asset('images/lookbook-blur.jpg') }}" />
                </div>
                <div class="mb-6 w-full md:w-1/2 md:pl-6">
                    <h2 class="font-thin text-grey-darkest text-2xl mb-4 relative">
                        Classic Lookbook
                    </h2>
                    <p class="font-thin text-sm text-grey-dark mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ante sem, porttitor eu eros eu, cursus laoreet erat. Aliquam leo dolor, tempus ac velit in, tempor iaculis magna. Sed in tincidunt ex, vel facilisis nisi. Donec varius massa a aliquet ullamcorper. Curabitur semper sollicitudin tempus. Duis ultricies libero quis sapien porttitor, a pretium ex eleifend. Donec at ultricies ante. Fusce porta quam pulvinar, consequat orci sed, venenatis lectus. Donec aliquam posuere lorem, et congue ex scelerisque sit amet. Aliquam sit amet egestas nisl, nec finibus ex. Mauris sit amet est malesuada, volutpat sapien vitae, rutrum mauris.</p>
                    
                    <h3 class="font-thin text-grey-darkest text-xl mb-4 relative">
                        Composition
                    </h3>
                    <p class="font-thin text-grey-dark mb-4">
                        Shirt:
                        <a href="#" class="text-grey-darker">Howards</a>
                    </p>
                    <p class="font-thin text-grey-dark mb-4">
                        Pants:
                        <a href="#" class="text-grey-darker">Luxire</a>
                    </p>
                    <p class="font-thin text-grey-dark mb-4">
                        Shoes:
                        <a href="#" class="text-grey-darker">Buttero</a>
                    </p>
                </div>
            </div>
            <div class="pt-4 border-t border-grey-lighter">
                <div class="text-left flex flex-wrap">
                    @for ( $i = 0; $i < 3; $i++ )
                        <a href="{{ url('/tag-' . $i) }}" class="flex px-4 py-2 text-base md:text-sm lg:text-xs bg-grey-lighter mb-4 mr-4 rounded no-underline text-grey-dark hover:bg-primary hover:text-white hover:shadow transition--fast">Tag {{ $i + 1 }}</a>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <div class="mb-20">
        <h3 class="font-thin text-grey-dark text-2xl text-center mb-6 group-hover:text-primary transition--fast relative">
            More articles in this category
        </h3>
        @for ( $i = 0; $i < 3; $i++ )
            @include ('_cards.article', ['class' => 'mb-8'])
        @endfor
    </div>
@endsection