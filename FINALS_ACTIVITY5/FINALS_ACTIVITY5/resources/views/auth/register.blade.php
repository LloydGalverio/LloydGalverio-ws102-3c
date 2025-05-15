<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="text-slate-800 dark:text-slate-200" />
            <x-text-input id="name" class="block mt-1 w-full border border-slate-400 dark:border-slate-600 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-900 dark:text-white" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-600" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-slate-800 dark:text-slate-200" />
            <x-text-input id="email" class="block mt-1 w-full border border-slate-400 dark:border-slate-600 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-900 dark:text-white" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-slate-800 dark:text-slate-200" />
            <x-text-input id="password" class="block mt-1 w-full border border-slate-400 dark:border-slate-600 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-900 dark:text-white"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-slate-800 dark:text-slate-200" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border border-slate-400 dark:border-slate-600 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-900 dark:text-white"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-blue-700 dark:text-blue-400 hover:text-blue-900 dark:hover:text-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 dark:focus:ring-offset-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4 bg-red-700 hover:bg-blue-800 focus:ring-blue-500 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-400">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
