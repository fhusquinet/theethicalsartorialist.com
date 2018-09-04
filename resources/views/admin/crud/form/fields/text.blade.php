<input
    type="text"
    name="{{ $attribute }}"
    class="border border-grey py-4 px-6 text-base font-thin text-grey rounded-lg focus:outline-none w-full max-w-sm"
    placeholder="{{ $field['placeholder'] ?? $field['label'] }}"
    value="{{ $value ?? $model->{$attribute} }}"
/>