<div
    {{ $attributes->merge(['class' => 'text-[16px] lg:text-[18px] text-(--text-secondary-color) animate-self animate-children']) }}>
    <p>
        {{ $slot }}
    </p>
</div>
