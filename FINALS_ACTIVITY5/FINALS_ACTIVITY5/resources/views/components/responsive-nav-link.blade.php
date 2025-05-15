@props(['active'])

@php
$classes = ($active ?? false)
    ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-[#fd2e58] text-start text-base font-medium text-[#031a64] bg-[#fde9eb] focus:outline-none focus:text-[#fd2e58] focus:bg-[#fbe4e8] focus:border-[#fd2e58] transition duration-150 ease-in-out'
    : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-[#031a64] hover:bg-[#f5faff] hover:border-[#fd2e58] focus:outline-none focus:text-[#031a64] focus:bg-[#f5faff] focus:border-[#fd2e58] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
