<div
    class="w-full overflow-hidden bg-white border border-gray-200 rounded shadow-sm dark:bg-gray-800 dark:border-gray-700">
    <img class="" src="{{ $image }}" alt="{{ $title }}" />
    <div class="p-4">
        <h2 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $title }}</h2>
        <div class="flex flex-wrap gap-2 items-center justify-between">
            <span class="text-sm font-medium text-gray-900 dark:text-white">{{ $price }} /
                {{ $duration }} Hrs</span>
        </div>
        <div class="w-full flex justify-end mt-2">
            <x-ui.button href="/">
                <x-icon.tag />
                Book Now
            </x-ui.button>
        </div>
    </div>
</div>
