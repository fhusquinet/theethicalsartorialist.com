@php
    if ( ! isset($bigCards) ) {
        $bigCards = true;
    }
    if ( ! isset($bigCardsAmount) ) {
        $bigCardsAmount = 3;
    }
@endphp
<div class="{{ $listClass ?? 'flex flex-wrap -mx-4' }}">
    @foreach ( $articles as $index => $article )
        @if ( $index < $bigCardsAmount && $bigCards )
            <div class="{{ $articleClass ?? 'w-full px-4 mb-8' }}">
                @include ('_cards.article-big', ['class' => 'h-full'])
            </div>
        @else
            <div class="{{ $articleClass ?? 'w-full md:w-1/2 px-4 mb-8' }}">
                @include ('_cards.article', ['class' => 'h-full'])
            </div>
        @endif
    @endforeach
    @include ('_partials.pagination', ['models' => $articles])
</div>