@if ( $image )
    {!! $image->img('', ['class' => $class ?? '', 'alt' => $image->getCustomProperty('alt', 'Image '.$image->id)]) !!}
@endif