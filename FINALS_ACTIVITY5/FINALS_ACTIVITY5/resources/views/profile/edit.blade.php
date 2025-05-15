<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight border-b-4 border-[#fd2e58] pb-2">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-[#031a64] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Update Profile Information -->
            <div class="p-6 bg-white/20 rounded-md shadow-md border border-[#fd2e58]">
                <div class="max-w-xl text-white">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="p-6 bg-white/20 rounded-md shadow-md border border-[#fd2e58]">
                <div class="max-w-xl text-white">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete User Account -->
            <div class="p-6 bg-white/20 rounded-md shadow-md border border-[#fd2e58]">
                <div class="max-w-xl text-white">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
