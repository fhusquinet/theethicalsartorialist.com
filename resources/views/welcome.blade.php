@extends ('app')

@section ('top-content')
    @component ('_components.header', ['image' => asset('images/articles/1.jpg'), 'imageBlur' => asset('images/articles/1-blur.jpg')])
        @slot ('title')
            Asket: Great basics for an ethical wardrobe
        @endslot
        @slot ('button')
            <a href="{{ url('article') }}" class="button button--white button--ghost inline-block transition--fast hover:shadow">Read now</a>
        @endslot
    @endcomponent
@endsection

@section ('content')
    <div class="flex flex-wrap -mx-4">
        @for ($i = 0; $i < 12; $i++)
            <div class="w-full md:w-1/2 px-4 mb-8">
                @include ('_cards.article')
            </div>
        @endfor
    </div>
@endsection