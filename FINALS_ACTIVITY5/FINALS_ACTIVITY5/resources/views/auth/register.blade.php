<x-guest-layout>
    <div class="bg-gray-100 p-6 rounded-md shadow-md max-w-md mx-auto">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium" style="color:#031a64;">Name</label>
                <input id="name" 
                    class="mt-1 block w-full rounded-md border shadow-sm focus:ring focus:ring-[#fd2e58]" 
                    type="text" name="name" :value="old('name')" required autofocus autocomplete="name" 
                    style="border-color:#031a64;"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium" style="color:#031a64;">Email</label>
                <input id="email" 
                    class="mt-1 block w-full rounded-md border shadow-sm focus:ring focus:ring-[#fd2e58]" 
                    type="email" name="email" :value="old('email')" required autocomplete="username" 
                    style="border-color:#031a64;"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium" style="color:#031a64;">Password</label>
                <input id="password" 
                    class="mt-1 block w-full rounded-md border shadow-sm focus:ring focus:ring-[#fd2e58]" 
                    type="password" name="password" required autocomplete="new-password" 
                    style="border-color:#031a64;"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium" style="color:#031a64;">Confirm Password</label>
                <input id="password_confirmation" 
                    class="mt-1 block w-full rounded-md border shadow-sm focus:ring focus:ring-[#fd2e58]" 
                    type="password" name="password_confirmation" required autocomplete="new-password" 
                    style="border-color:#031a64;"
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex justify-end mb-6">
                <x-primary-button class="px-4 py-2 rounded-md text-white" style="background-color:#fd2e58;" onmouseover="this.style.backgroundColor='#031a64'" onmouseout="this.style.backgroundColor='#fd2e58'">
                    Register
                </x-primary-button>
            </div>

            <div class="text-center">
                <a href="{{ route('login') }}" class="text-sm font-medium underline" style="color:#031a64;" onmouseover="this.style.color='#fd2e58'" onmouseout="this.style.color='#031a64'">
                    Already registered? Login
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
