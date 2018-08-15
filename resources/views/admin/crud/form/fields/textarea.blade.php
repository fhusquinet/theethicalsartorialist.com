<textarea
    name="{{ $attribute }}"
    class="border border-grey py-4 px-6 text-base font-thin text-grey rounded-lg focus:outline-none w-full"
    placeholder="{{ $field['placeholder'] ?? $field['label'] }}"
    style="height: {{ $field['height'] ?? '400' }}px;"
>{{ $article->{$attribute} }}</textarea>