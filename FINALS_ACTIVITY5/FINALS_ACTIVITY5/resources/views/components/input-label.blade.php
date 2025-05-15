@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-base font-semibold text-[#031a64] dark:text-[#cdf71e]']) }}>
    {{ $value ?? $slot }}
</label>
