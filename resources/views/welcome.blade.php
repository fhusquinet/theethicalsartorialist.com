@extends ('app')

@section ('top-content')
    @include ('_cards.article', ['class' => 'mb-8'])
@endsection

@section ('left-content')
    @include ('_cards.article', ['class' => 'mb-8'])
    @include ('_cards.article', ['class' => 'mb-8'])
    @include ('_cards.article', ['class' => 'mb-8'])
    @include ('_cards.article', ['class' => 'mb-8'])
    @include ('_cards.article', ['class' => 'mb-8'])
@endsection