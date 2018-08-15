@php
    $active = false;
    if ( isset($routes) ) {
        $active = in_array(Route::currentRouteName(), array_wrap($routes));
    }
@endphp

<li>
    <a
        href="{{ $url }}"
        class="group block no-underline @if ( $active ) text-primary-dark bg-grey-lightest font-normal hover:text-primary-darker border-primary @else text-grey-dark font-thin hover:text-primary-dark border-white @endif py-4 pl-14 pr-6 relative border-l-4"
    >
        {{ $text }}
        <img class="absolute pin-l w-4 h-4 pin-center-y block ml-4 opacity-75 group-hover:opacity-100" src="{{ $icon }}" />
    </a>
</li>