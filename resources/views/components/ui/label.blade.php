<label for="{{ $for }}" class="block text-sm font-medium text-gray-900 dark:text-white">
    {{ $slot }} @if ($required)
        <span class="text-red-500">*</span>
    @endif
</label>
