<a {{ $attributes->only('href') }}
    class="cursor-pointer text-(--text-secondary-color) w-fit hover:text-(--text-primary-color) text-[14px] hover:underline decoration-[1.5px] underline-offset-5 animate-self"
    target="_blank">
    {{ $slot }}
</a>
