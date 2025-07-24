<div class="embla w-full">
    <div class="embla__viewport overflow-hidden">
        <div class="embla__container flex">
            {{-- Carousel item must be supplied here --}}
            {{ $slot }}
        </div>
    </div>
    <div class="embla__controls pt-4">
        <div class="embla__dots flex gap-[5px]"></div>
    </div>
</div>
