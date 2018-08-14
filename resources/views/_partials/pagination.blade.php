@if ($paginator->hasPages())
    <ul class="mt-8 list-reset w-full text-center" role="navigation">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="inline-block mx-1 disabled" aria-disabled="true"><span class="px-2 py-3 inline-block text-base text-grey">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="inline-block mx-1 active" aria-current="page"><span class="px-2 py-3 inline-block text-base text-primary-dark border-b-2 border-primary">{{ $page }}</span></li>
                    @else
                        <li class="inline-block mx-1"><a class="font-thin no-underline px-2 py-3 inline-block text-base text-grey-dark" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>
@endif
