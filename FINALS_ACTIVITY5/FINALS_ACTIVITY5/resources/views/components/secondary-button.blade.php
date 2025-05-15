<button {{ $attributes->merge([
    'type' => 'button', 
    'class' => 'inline-flex items-center px-4 py-2 bg-blue-600 dark:bg-blue-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 dark:hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 disabled:opacity-25 transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>
