<a {{ $attributes->merge([
    'class' => 'block w-full px-4 py-2 text-start text-sm leading-5 text-[#031a64] hover:bg-[#fd2e58] hover:text-white focus:outline-none focus:bg-[#fd2e58] focus:text-white transition duration-150 ease-in-out'
]) }}>
    {{ $slot }}
</a>
