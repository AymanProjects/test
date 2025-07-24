@props(['href'])

@php
    $purgedRef = Str::remove('#', $href);
    $isActive = request()->url() === $purgedRef;
@endphp

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => 'hover:text-(--text-primary-color) animate-self ' . ($isActive ? ' text-(--text-primary-color)' : ' text-(--text-secondary-color)')]) }}>
    {{ $slot }}
</a>
