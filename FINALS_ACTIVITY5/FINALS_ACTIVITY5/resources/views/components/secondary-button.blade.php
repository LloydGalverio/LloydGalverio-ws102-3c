<button {{ $attributes->merge([
    'type' => 'button',
    'class' => 'inline-flex items-center px-4 py-2 bg-[#fd2e58] dark:bg-[#b52a48] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-[#e72c52] dark:hover:bg-[#9c2641] focus:outline-none focus:ring-2 focus:ring-[#fd2e58] focus:ring-offset-2 dark:focus:ring-offset-gray-900 disabled:opacity-25 transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>
