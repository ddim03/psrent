<div class="space-y-1">
    <x-ui.label for="{{ $name }}" required="{{ $required }}">
        {{ $title }}
    </x-ui.label>
    <x-ui.input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
        placeholder="{{ $placeholder }}" required="{{ $required }}" />
    @error($error)
        <x-ui.input-error :message="$message" />
    @enderror
</div>
