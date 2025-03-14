<header
    class="bg-white border-gray-200 dark:bg-gray-900 border-b-gray-100 dark:border-b-gray-700 shadow-xs fixed w-full top-0 left-0">
    <nav class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4 px-5 xl:px-0">
        <x-element.application-logo></x-element.application-logo>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex p-4 md:p-0 mt-4 border border-gray-100 rounded bg-gray-50 flex-row space-x-2 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 justify-center">
                <li>
                    <button id="theme-toggle"
                        x-on:click="() => { darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)}"
                        class="inline-flex cursor-pointer items-center gap-2 bg-gray-100 dark:bg-gray-900 lg:bg-gray-100 md:dark:bg-gray-800 rounded text-sm p-2">
                        <x-icon.moon id="theme-toggle-dark-icon" />
                        <x-icon.sun id="theme-toggle-light-icon" />
                    </button>
                </li>
                <li>
                    <button href="/"
                        class="inline-flex cursor-pointer items-center gap-2 bg-gray-100 dark:bg-gray-900 lg:bg-gray-100 md:dark:bg-gray-800 rounded text-sm p-2">
                        <x-icon.cart />
                    </button>
                </li>
                <li>
                    @guest
                        <x-ui.button href="{{ route('login') }}">
                            Login
                            <x-icon.arrow-right />
                        </x-ui.button>
                    @endguest
                    @auth
                        <div class="flex items-center space-x-3 md:space-x-0">
                            <button type="button" class="flex text-sm rounded md:me-0" id="user-menu-button"
                                aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                                <span class="sr-only">Open user menu</span>
                                <div class="relative w-9 h-9 overflow-hidden bg-gray-100 rounded dark:bg-gray-600">
                                    <svg class="absolute w-11 h-11 text-gray-400 -left-1" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </button>
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow-sm dark:bg-gray-700 dark:divide-gray-600"
                                id="user-dropdown">
                                <div class="px-4 py-3">
                                    <span
                                        class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                                    <span
                                        class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
                                </div>
                                <ul class="py-2" aria-labelledby="user-menu-button">
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="block px-4 py-2 w-full text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                Log out
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endauth
                </li>
            </ul>
        </div>
    </nav>
</header>
