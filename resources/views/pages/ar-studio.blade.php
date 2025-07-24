@php
    $aboutItems = [
        [
            'text' =>
                ' AR Studio is a citizen development platform for creating augmented reality applications with minimal technical experience.',
            'img' => '3.webp',
            'icon' => 'icon-code',
        ],
        [
            'text' =>
                'Transform CAD and IoT data into detailed augmented reality (AR) experiences that provide critical information to front-line workers when and where they need it most.',
            'img' => '2.webp',
            'icon' => 'icon-brush',
        ],
        [
            'text' =>
                'Train your own AI model and have it accessible for workers to ask and grab any information needed, on the spot.',
            'img' => '1.jpg',
            'icon' => 'icon-ai',
        ],
    ];
@endphp

<x-layouts.master-layout>
    <x-layouts.main-section fitScreenY class="flex flex-col justify-center items-center">
        <div class="max-w-[580px]">
            <div class="text-left text-pretty pb-12">
                <x-typography.h2 class="pb-4">
                    Elevate workforce potential with
                    <span class="inline-block text-green-500">AR Studio</span>
                </x-typography.h2>
                <x-typography.subhead>
                    Efficiently create immersive AR experiences
                    that leverage existing 3D and IoT data—and improve
                    worker safety, proficiency, and agility.
                </x-typography.subhead>
            </div>
            <video class="aspect-2/1 object-cover rounded-2xl shadow-[0px_0px_200px_-80px_rgba(0,100,0,1)]" controls
                src='{{ asset('storage/vids/ar-studio/ar-studio-overview.mp4') }}' preload="auto">
            </video>
            <div class="text-center text-[11px] italic text-(--text-secondary-color) pt-2">
                Development Workflow Demo
            </div>
        </div>
    </x-layouts.main-section>
    <x-layouts.main-section class="flex flex-col gap-20 text-center" title="Overview">
        @foreach ($aboutItems as $item)
            <div
                class="flex flex-col justify-around items-center gap-20 {{ $loop->index % 2 !== 0 ? 'lg:flex-row-reverse' : 'lg:flex-row' }}">
                <x-typography.p class="m-auto max-w-[400px] lg:max-w-[300px]">
                    <div>
                        <x-misc.material-icon class="{{ $item['icon'] }}" size="28px"></x-misc.material-icon>
                    </div>
                    {{ $item['text'] }}
                </x-typography.p>
                <img class="rounded-xl aspect-video object-cover w-[500px] lg:max-w-[45%] border-[1px] border-(--border-color) brightness-80"
                    src="{{ asset('/storage/imgs/ar-studio/' . $item['img']) }}" />
            </div>
        @endforeach
    </x-layouts.main-section>
    <x-layouts.main-section invertBg title="Gallery" class="">
        <x-misc.carousel.carousel-view>
            <x-misc.carousel.carousel-item>
                <x-cards.img-card class="size-full" expandable src="{{ asset('storage/imgs/ar-studio/2.webp') }}">
                </x-cards.img-card>
            </x-misc.carousel.carousel-item>
            <x-misc.carousel.carousel-item>
                <x-cards.img-card class="size-full" expandable src="{{ asset('storage/imgs/ar-studio/4.png') }}">
                </x-cards.img-card>
            </x-misc.carousel.carousel-item>
            <x-misc.carousel.carousel-item>
                <video class="size-full rounded-2xl" controls
                    src='{{ asset('storage/vids/ar-studio/desalter-demo.mp4') }}' preload="auto">
                </video>
            </x-misc.carousel.carousel-item>
        </x-misc.carousel.carousel-view>
    </x-layouts.main-section>
</x-layouts.master-layout>
