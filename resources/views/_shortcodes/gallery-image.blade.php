<a
    class="{{ $class ?? '' }}"
    href="{{ $image->getUrl('x-large') }}"
    data-at-450="{{ $image->getUrl('small') }}"
    data-at-800="{{ $image->getUrl('medium') }}"
    data-at-1366="{{ $image->getUrl('large') }}"
    data-at-1920="{{ $image->getUrl('x-large') }}"
    data-caption="{{ $caption ?? '' }}"
>
    [image id="{{ $image->id }}" class="{{ $imageClass ?? '' }}"]
</a>