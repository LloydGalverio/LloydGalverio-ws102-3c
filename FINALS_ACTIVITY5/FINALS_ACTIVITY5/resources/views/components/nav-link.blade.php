@props(['active'])

@php
$activeClasses = 'inline-flex items-center px-1 pt-1 border-b-2 border-[#fd2e58] text-sm font-medium leading-5 text-[#031a64] focus:outline-none focus:border-[#fd2e58] transition duration-150 ease-in-out';
$inactiveClasses = 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-[#031a64] hover:border-[#fd2e58] focus:outline-none focus:text-[#031a64] focus:border-[#fd2e58] transition duration-150 ease-in-out';

$classes = ($active ?? false) ? $activeClasses : $inactiveClasses;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
