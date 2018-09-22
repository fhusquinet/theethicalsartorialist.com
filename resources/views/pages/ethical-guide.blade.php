@php
    $meta = [
        'title'    => 'Ethical Guide',
        'og:title' => 'Ethical Guide'
    ];
@endphp

@extends ('app')

@section ('top-content')
    @component ('_components.header')
        @slot ('title', 'Ethical guide')
        @slot ('text', "We all have different ideas on what consistue an ethical garment, so let's explore the different aspects here")
    @endcomponent
@endsection

@section ('content-container')
    @component ('pages._partials.section-img-left', ['class' => ''])
        @slot ('image')
            [image class="img-cover b-lazy"  id=143]
            <p class="text-grey-darker font-thin text-sm mt-2">Photo by elCarito on Unsplash</p>
        @endslot
        @slot ('text')
            <h3 class="text-grey-darkest font-thin leading-loose mb-4 text-2xl lg:text-3xl">The human and social aspect</h3>
            <p class="text-grey-darker font-thin leading-loose mb-2">
                From 1970 to 2013 the ratio of Made in USA garments worn by Americans went down from 75% to 2%. The world is changing fast, way too fast.
            </p>
            <p class="text-grey-darker font-thin leading-loose mb-2">
                Humans found a way to produce cheaper garments in third world country while providing jobs to the people in need. It must be a win-win situation right?
            </p>
            <p class="text-grey-darker font-thin leading-loose mb-2">
                In the perfect world that could have been the case. But you cannot use the poverty of a country to your own benefit then play the - I'm a good company - card.
            </p>
            <p class="text-grey-darker font-thin leading-loose mb-2">
                This is a huge problem affecting a lot of industries and recently people started to realised that it wasn't that good of an idea to begin with.
            </p>
        @endslot
    @endcomponent
    @component ('pages._partials.section-img-right')
        @slot ('image')
            [image class="img-cover b-lazy"  id=141]
            <p class="text-grey-darker font-thin text-sm mt-2">Photo by zoltantasi on Unsplash</p>
        @endslot
        @slot ('text')
            <h3 class="text-grey-darkest font-thin leading-loose mb-4 text-2xl lg:text-3xl">The animal welfare</h3>
            <p class="text-grey-darker font-thin leading-loose mb-2">
                Along side the human exploitation is a side that is becoming more and more well-known thanks to the popularity, and bad press, of the vegan movement.
            </p>
            <p class="text-grey-darker font-thin leading-loose mb-2">
                From sheeps being kicked in the head for wool, silkworms being boiled alive while they are in their cocoon or cows force to walk for dozens of kilometers before being crammed into trunks to go into the slaughterhouse.
            </p>
            <p class="text-grey-darker font-thin leading-loose mb-2">
                It isn't so lovely being an animal used for the fashion industry. But it doesn't have to be that way. Alternatives to leather are starting to pop left and right, more ethical treatments are finally being used for shearing and silk can totally be avoided.
            </p>
        @endslot
    @endcomponent
    @component ('pages._partials.section-img-left', ['class' => ''])
        @slot ('image')
            [image class="img-cover b-lazy"  id=142]
            <p class="text-grey-darker font-thin text-sm mt-2">Photo by Jason Blackeye on Unsplash</p>
        @endslot
        @slot ('text')
            <h3 class="text-grey-darkest font-thin leading-loose mb-4 text-2xl lg:text-3xl">The environmental impact</h3>
            <p class="text-grey-darker font-thin leading-loose mb-2">
                As for any industry, when you start doing anything and everything for profit the earth is gonna take it's piece of the cake.
            </p>
            <p class="text-grey-darker font-thin leading-loose mb-2">
                It takes huge amount of water to produce a single garment, a great part of that water is then polluted during the dying process then simply rejected into regular rivers in countries where the legislations are non-existant.
            </p>
            <p class="text-grey-darker font-thin leading-loose mb-2">
                Do people really think having 10 pair of jeans from H&M is worth giving up on our planet?
            </p>
        @endslot
    @endcomponent
    @component ('pages._partials.section-img-right')
        @slot ('image')
            [image class="img-cover b-lazy"  id=144]
            <p class="text-grey-darker font-thin text-sm mt-2">Photo by Fancycrave on Unsplash</p>
        @endslot
        @slot ('text')
            <h3 class="text-grey-darkest font-thin leading-loose mb-4 text-2xl lg:text-3xl">Slow fashion</h3>
            <p class="text-grey-darker font-thin leading-loose mb-2">
                Have you ever felt out of fashion when you walked inside your local mall packed with fash fashion brands? That's because they create new collections all year round to create this addiction of buying new clothes so many people have nowadays.
            </p>
            <p class="text-grey-darker font-thin leading-loose mb-2">
                Slow fashion is the complete opposite, brands focus more on essentials like plain t-shirts and chinos, and do not change their entire collection each month. Instead they will instead improve on the most popular products and remove the others.
            </p>
        @endslot
    @endcomponent
@endsection