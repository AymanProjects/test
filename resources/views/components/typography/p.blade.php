<div
    {{ $attributes->merge(['class' => 'text-[14px] lg:text-[16px] lg:text-lg text-balance text-(--text-secondary-color) leading-5 tracking-wide animate-self animate-children']) }}>
    <p>
        {{ $slot }}
    </p>
</div>
