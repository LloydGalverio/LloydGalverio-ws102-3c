<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#031a64] leading-tight border-b-4 border-[#fd2e58] pb-2">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md border border-[#031a64] overflow-hidden sm:rounded-lg">
            <div class="text-[#031a64] font-medium text-lg mb-6 text-center">
                {{ __("You're logged in!") }}
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    type="submit"
                    class="w-full px-4 py-2 rounded-md text-white bg-[#fd2e58] hover:bg-[#031a64] focus:outline-none focus:ring-2 focus:ring-[#fd2e58] transition-colors duration-300"
                >
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
