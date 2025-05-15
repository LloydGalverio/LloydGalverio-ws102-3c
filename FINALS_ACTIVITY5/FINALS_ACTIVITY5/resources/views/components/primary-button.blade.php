<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center px-6 py-3 bg-blue-700 dark:bg-blue-800 border border-transparent rounded-lg font-bold text-sm text-white uppercase tracking-wider shadow-md hover:bg-blue-800 dark:hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>
