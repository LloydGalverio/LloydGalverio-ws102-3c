<x-guest-layout>
   
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg-gray-100 p-6 rounded-md shadow-md max-w-md mx-auto">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium" style="color:#031a64;">Email</label>
                <input id="email" 
                    class="mt-1 block w-full rounded-md border shadow-sm focus:ring focus:ring-[#fd2e58]" 
                    type="email" name="email" required autofocus 
                    style="border-color:#031a64;"
                />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium" style="color:#031a64;">Password</label>
                <input id="password" 
                    class="mt-1 block w-full rounded-md border shadow-sm focus:ring focus:ring-[#fd2e58]" 
                    type="password" name="password" required autocomplete="current-password" 
                    style="border-color:#031a64;"
                />
            </div>

            <!-- Remember Me -->
            <div class="block mb-4">
                <label for="remember_me" class="inline-flex items-center" style="color:#031a64;">
                    <input id="remember_me" 
                        type="checkbox" 
                        class="rounded shadow-sm focus:ring-[#fd2e58]" 
                        name="remember"
                        style="border-color:#031a64; color:#fd2e58;"
                    >
                    <span class="ml-2 text-sm">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-between mb-6">
                @if (Route::has('password.request'))
                    <a class="underline text-sm" href="{{ route('password.request') }}" style="color:#031a64;" onmouseover="this.style.color='#fd2e58'" onmouseout="this.style.color='#031a64'">
                        Forgot your password?
                    </a>
                @endif

                <button type="submit" class="px-4 py-2 rounded-md text-white" style="background-color:#fd2e58;" onmouseover="this.style.backgroundColor='#031a64'" onmouseout="this.style.backgroundColor='#fd2e58'">
                    Log in
                </button>
            </div>

            <div class="text-center">
                <a href="{{ route('register') }}" class="text-sm font-medium underline" style="color:#031a64;" onmouseover="this.style.color='#fd2e58'" onmouseout="this.style.color='#031a64'">
                   Dont have an account? <u>Register</u>
                </a>
            </div>
        </form>
    </div>

</x-guest-layout>
