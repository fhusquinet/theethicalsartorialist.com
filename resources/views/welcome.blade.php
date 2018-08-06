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

@section ('left-content')
    @include ('_cards.article', ['class' => 'mb-8'])
    @include ('_cards.article', ['class' => 'mb-8'])
    @include ('_cards.article', ['class' => 'mb-8'])
    @include ('_cards.article', ['class' => 'mb-8'])
    @include ('_cards.article', ['class' => 'mb-8'])
@endsection