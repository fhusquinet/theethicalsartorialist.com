<select
    @if ( $field['multiple'] )
        name="{{ $attribute }}[]"
    @else
        name="{{ $attribute }}"
    @endif
    @isset ( $field['multiple'] )
        multiple
    @endisset
    class="border border-grey py-4 px-6 text-base font-thin text-grey rounded-lg focus:outline-none w-full max-w-sm"
>
    @foreach ( $field['options'] as $option )
        <option
            value="{{ $option->{$field['option_value'] ?? 'id'} }}"
            @if ( isset($field['multiple']) )
                @if ( $model{$attribute}->contains($field['option_value'] ?? 'id', $option->{$field['option_value'] ?? 'id'}) )
                    selected
                @endif
            @elseif ( $model->{$attribute} == $option->{$field['option_value'] ?? 'id'} )
                selected
            @endif
        >
            {{ $option->{$field['option_column'] ?? 'title'} }}
        </option>
    @endforeach
</select>