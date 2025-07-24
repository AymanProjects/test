<x-layouts.master-layout>
    <x-layouts.main-section id="#" fitScreenY class='flex flex-col text-center justify-center items-center'>
        <x-typography.h1 class="pb-4">
            Innovate Reality.
        </x-typography.h1>
        <x-typography.subhead class="pb-18 text-balance w-[350px] lg:w-[450px]">
            Explore the tools, platforms, and hardware defining the next wave of immersive experiences
            offered by the AR/VR Team
        </x-typography.subhead>
        <x-buttons.primary-btn large href="#Immersive Solutions">
            <div>View our solutions</div>
        </x-buttons.primary-btn>
        <div class="h-10"></div>
    </x-layouts.main-section>

    <x-layouts.main-section id="Immersive Solutions" title="Immersive Solutions" invertBg>
        <div class="grid place-items-center lg:grid-cols-2 gap-[60px] w-full">
            <x-cards.solution-card title="ENOA" subtitle="Energizing tomorrow, together." link="{{ url('ENOA') }}"
                image="{{ asset('storage/imgs/enoa/card_img.jpg') }}">
            </x-cards.solution-card>
            <x-cards.solution-card title="AR studio"
                subtitle="The unified augmented reality platform, for cistizen developers."
                link="{{ url('AR-Studio') }}" image="{{ asset('storage/imgs/ar-studio/2.webp') }}">
            </x-cards.solution-card>
            <x-cards.solution-card title="unity" subtitle="Metaverse of the future, today." link="{{ url('Unity') }}"
                image="{{ asset('storage/imgs/enoa_preview.jpg') }}">
            </x-cards.solution-card>
            <x-cards.solution-card title="Digital Helmet" subtitle="Metaverse of the future, today."
                link="{{ url('Digital-Helmet') }}" image="{{ asset('storage/imgs/enoa_preview.jpg') }}">
            </x-cards.solution-card>
        </div>
    </x-layouts.main-section>
</x-layouts.master-layout>
