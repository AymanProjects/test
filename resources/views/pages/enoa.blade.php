<x-layouts.master-layout>
    <x-layouts.main-section id="#" fitScreenY class="flex flex-col items-center">
        <x-typography.h1 class="enoa-gradient text-transparent bg-clip-text text-shadow-lg text-center pb">
            enoa
        </x-typography.h1>
        <div
            class="max-w-[700px] h-[400px] bg-[#D16BA5]/60 rounded-3xl -translate-y-1.5 md:-translate-y-1 lg:-translate-y-4">
            <div class="perspective-dramatic size-full -translate-y-4 drop-shadow-[0px_10px_20px_rgba(0,255,255,0.3)]">
                <img class="rotate-x-2 rotate-z-2 size-full object-cover rounded-3xl brightness-85"
                    src="{{ asset('storage/imgs/enoa/card_img.jpg') }}">
            </div>
        </div>
    </x-layouts.main-section>
    <x-layouts.main-section id="Overview" title="Overview" class="flex flex-col items-center">
        <x-typography.subhead class="text-center max-w-[450px]">
            enoa (energy oasis) <br>
            Aramco's immersive campus. Providing a seamless ecosystem for corporate 'Extended Reality'
            solutions
        </x-typography.subhead>
        <div class="max-w-[700px] pt-8 pb-14">
            <img class="size-full object-cover rounded-3xl bg-(--text-primary-color)"
                src="{{ asset('storage/imgs/enoa/sections.png') }}">
        </div>
        <x-typography.subhead class="text-center max-w-[450px]">
            It is a virtual place, designed for collaboration, work, training and entertainment.
        </x-typography.subhead>
        <div class="max-w-[700px] pt-8">
            <img class="size-full object-cover rounded-3xl" src="{{ asset('storage/imgs/enoa/1.png') }}">
        </div>
    </x-layouts.main-section>
    <x-layouts.main-section id="Explore enoa" title="Explore enoa" class="flex flex-col items-center">
        <div class="max-w-[700px]">
            <img class="size-full object-cover rounded-3xl" src="{{ asset('storage/imgs/enoa/enoa_main.jpg') }}">
        </div>
    </x-layouts.main-section>
</x-layouts.master-layout>
