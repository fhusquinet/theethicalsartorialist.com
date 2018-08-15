@if ( isset($field['current']) )
    <img src="{{ $field['current'] }}" class="w-full max-w-sm mb-4" />
@endif

<input type="file" name="{{ $attribute }}" />