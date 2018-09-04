@php ($instance = str_random(50))

@if ( isset($field['current']) )
    <div class="block">
        <img src="{{ $field['current'] }}" class="w-full max-w-sm mb-4" />
    </div>
@endif

<div class="block">
    <label for="{{ $instance }}" class="inline-block py-8 px-12 bg-primary-light border border-primary-light text-white transition hover:cursor-pointer hover:bg-white hover:text-primary hover:border-primary">Upload your file</label>
    <input id="{{ $instance }}" type="file" name="{{ $attribute }}" class="hidden" />
</div>