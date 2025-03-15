<x-layout.app title="Login">
    <main
        class="bg-gray-50 dark:bg-gray-900 flex flex-col items-center justify-center px-6 py-8 mx-auto min-h-dvh lg:py-0 space-y-5">
        <x-element.application-logo />
        <div
            class="w-full bg-white rounded shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Log in to your account
                </h1>
                <form class="space-y-4" action="{{ route('login') }}" method="POST">
                    @csrf
                    <x-element.form-input title="Email" for="email" type="email" name="email"
                        placeholder="name@company.com" required="true" :value="old('email')" error="email" />
                    <x-element.form-input title="Password" for="password" type="password" name="password"
                        placeholder="••••••••" required="true" error="email" />
                    <div class="flex
                        items-center">
                        <input id="remember" aria-describedby="remember" type="checkbox" name="remember" value="true"
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                        <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember
                                me</label>
                        </div>
                    </div>
                    <x-ui.button type="submit" class="w-full cursor-pointer">
                        Login
                    </x-ui.button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Don’t have an account yet?
                        <a href="{{ route('register') }}"
                            class="font-medium !text-blue-600 hover:underline dark:text-blue-500">Register</a>
                    </p>
                </form>
            </div>
        </div>
    </main>
</x-layout.app>
