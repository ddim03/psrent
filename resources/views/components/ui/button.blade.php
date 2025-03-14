@isset($href)
    <a href={{ $href }} role="button"
        class="text-white inline-flex items-center gap-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 {{ $class ?? '' }}">
        {{ $slot }}
    </a>
@endisset
@isset($type)
    <button type={{ $type }}
        class="text-white inline-flex items-center justify-center gap-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 {{ $class }}">
        {{ $slot }}
    </button>
@endisset
