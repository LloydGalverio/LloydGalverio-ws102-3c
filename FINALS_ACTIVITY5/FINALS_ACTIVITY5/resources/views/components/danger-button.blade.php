<button {{ $attributes->merge([
    'type' => 'submit', 
    'class' => 'inline-flex items-center px-4 py-2 bg-[#fd2e58] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#031a64] active:bg-[#a0203c] focus:outline-none focus:ring-2 focus:ring-[#fd2e58] focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>
