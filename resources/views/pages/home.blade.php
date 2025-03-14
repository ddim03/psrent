<x-layout.app title="Home">
    <x-element.navbar />
    <main class="h-dvh pt-20 max-w-screen-xl px-5 xl:px-0 mx-auto">
        <section class="mt-8">
            <h1 class="text-xl font-bold text-gray-900 dark:text-white text-center">Choose Your Console
            </h1>
            <div
                class="mt-2 dark:border-gray-700 py-3 grid grid-cols-1 gap-4 lg:grid-cols-4 justify-center lg:justify-start">
                @forelse ($units as $unit)
                    <x-element.card :title="$unit->name" :price="$unit->service->price_per_session" :duration="$unit->service->session_duration" :image="$unit->image" />
                @empty
                    <span class="text-gray-500 dark:text-gray-400">No Data</span>
                @endforelse
            </div>
        </section>
    </main>
</x-layout.app>
