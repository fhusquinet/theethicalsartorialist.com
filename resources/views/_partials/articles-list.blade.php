<div class="flex flex-wrap -mx-4">
    @foreach ( $articles as $article )
        <div class="w-full md:w-1/2 px-4 mb-8">
            @include ('_cards.article', ['class' => 'h-full'])
        </div>
    @endforeach
    @include ('_partials.pagination', ['models' => $articles])
</div>