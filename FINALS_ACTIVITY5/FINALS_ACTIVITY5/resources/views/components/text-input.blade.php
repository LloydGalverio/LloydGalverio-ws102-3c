@props(['disabled' => false])

<input
    @disabled($disabled)
    {{ $attributes->merge([
        'class' => 'text-base px-4 py-2 border-2 border-[#031a64] dark:border-[#fd2e58] bg-white dark:bg-gray-100 text-gray-900 dark:text-[#031a64] placeholder-gray-500 dark:placeholder-[#7c3aed] focus:border-[#031a64] dark:focus:border-[#fd2e58] focus:ring-2 focus:ring-[#031a64] dark:focus:ring-[#fd2e58] rounded-md shadow-lg transition ease-in-out duration-200'
    ]) }}
/>
