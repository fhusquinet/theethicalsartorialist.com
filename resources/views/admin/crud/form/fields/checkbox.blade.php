<input
    type="checkbox"
    name="{{ $attribute }}"
    @if ( $model->{$attribute} )
        checked
    @endif
/>