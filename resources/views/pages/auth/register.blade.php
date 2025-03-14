<x-layout.app title="Register">
    <main
        class="bg-gray-50 dark:bg-gray-900 flex flex-col items-center justify-center px-6 py-8 mx-auto h-dvh lg:py-0 space-y-5">
        <x-element.application-logo />
        <div
            class="w-full bg-white rounded shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Create an account
                </h1>
                <form class="space-y-4" action="{{ route('register') }}" method="POST">
                    @csrf
                    <x-element.form-input title="Your Name" for="name" type="text" name="name"
                        placeholder="John Doe" required="true" :value="old('name')" error="name" />
                    <x-element.form-input title="Email" for="email" type="email" name="email"
                        placeholder="name@company.com" required="true" :value="old('email')" error="email" />
                    <x-element.form-input title="Password" for="password" type="password" name="password"
                        placeholder="••••••••" required="true" error="password" />
                    <x-element.form-input title="Confirm password" for="password_confirmation " type="password"
                        name="password_confirmation" placeholder="••••••••" required="true" error="password" />
                    <div class="flex items-center">
                        <input id="terms" aria-describedby="terms" type="checkbox" name="terms"
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                            required>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300">
                                I accept the
                                <span data-tooltip-target="tooltip-top" data-tooltip-placement="top"
                                    class="font-medium text-blue-600 hover:underline dark:text-blue-500">
                                    Terms and Conditions
                                </span>
                            </label>
                            <div id="tooltip-top" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 rounded shadow-xs opacity-0 tooltip max-w-lg">
                                <x-element.term-and-conditions></x-element.term-and-conditions>
                            </div>
                            @error('terms')
                                <x-ui.input-error :message="$message" />
                            @enderror)
                        </div>
                    </div>
                    <x-ui.button type="submit" class="w-full cursor-pointer">
                        Create an account
                    </x-ui.button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account?
                        <a href="{{ route('login') }}"
                            class="font-medium text-blue-600 hover:underline dark:text-blue-500">
                            Login here
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </main>
</x-layout.app>
