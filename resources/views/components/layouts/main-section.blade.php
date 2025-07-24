@props(['title', 'invertBg', 'fitScreenY'])

@php
    $fitScreenY = isset($fitScreenY) ? 'min-h-[calc(100vh-var(--header-height))] mt-(--header-height)' : '';
    $invertBg = isset($invertBg) ? 'bg-(--bg-secondary-color)' : '';
    $modifiers = $invertBg . ' ' . $fitScreenY . ' ';
@endphp

<section {{ $attributes->only('id') }} class="{{ $modifiers . ' w-screen flex flex-col items-center' }}">
    @isset($title)
        <div class="flex gap-12 items-center w-full rounded-full pt-(--section-y-padding)">
            <div class="flex-1 h-[0.8px] bg-gradient-to-r from-transparent to-(--border-color)"></div>
            <h2 class="font-semibold text-3xl lg:text-4xl">{{ $title }}</h2>
            <div class="flex-1 h-[0.8px] bg-gradient-to-r from-(--border-color) to-transparent"></div>
        </div>
    @endisset
    <div
        {{ $attributes->merge(['class' => 'flex-grow w-full max-w-(--page-width) px-(--section-x-padding) py-(--section-y-padding)']) }}>
        {{ $slot }}
    </div>
</section>
