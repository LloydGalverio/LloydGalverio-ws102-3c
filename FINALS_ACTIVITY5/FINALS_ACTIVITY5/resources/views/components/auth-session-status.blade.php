@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-[#031a64]']) }}>
        {{ $status }}
    </div>
@endif
