<div
    {{ $attributes->merge(['class' => 'text-[60px] md:text-[70px] lg:text-[80px] leading-16 lg:leading-24 font-bold animate-self animate-children']) }}>
    <h1>
        {{ $slot }}
    </h1>
</div>
