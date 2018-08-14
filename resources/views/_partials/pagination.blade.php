@php
    $pages = collect(PaginateRoute::allUrls($models))
                ->map(function($url, $index) {
                    $page = $index + 1;
                    return [
                        'current' => $page == PaginateRoute::currentPage(),
                        'page' => $page,
                        'url' => $url
                    ]; 
                });
@endphp

@if ($pages->isNotEmpty())
    <ul class="mt-8 list-reset w-full text-center" role="navigation">
        @foreach ($pages as $page)
            @if ( $page['current'] )
                <li class="inline-block mx-1 active" aria-current="page"><span class="px-2 py-3 inline-block text-base text-primary-dark border-b-2 border-primary">{{ $page['page'] }}</span></li>
            @else
                <li class="inline-block mx-1"><a class="font-thin no-underline px-2 py-3 inline-block text-base text-grey-dark" href="{{ $page['url'] }}">{{ $page['page'] }}</a></li>
            @endif
        @endforeach
    </ul>
@endif
