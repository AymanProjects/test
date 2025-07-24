@php
    $footerColumns = [
        'Partners' => [
            'Unity Technologies' => 'https://unity.com',
            'Arthur Digital' => 'https://arthur.digital',
            'Pixo VR' => 'https://pixovr.com',
            'PTC Inc.' => 'https://ptc.com',
            'RealWear' => 'https://realwear.com',
        ],
        'Address' => [
            'Dhahran, Al-midra Tower, 13th Floor, AR/VR Lap' =>
                'https://www.google.com/maps/place/Al+Midra+Tower/@26.3295565,50.1081384,18.33z/data=!4m15!1m8!3m7!1s0x3e49e40fa0c887bb:0x2d94f9d934e53747!2sAl+Midra+Tower,+Al+Midra+Blvd,+Saudi+Aramco,+Dhahran+34481!3b1!8m2!3d26.3295492!4d50.1087123!16s%2Fg%2F11gzycb94!3m5!1s0x3e49e40f85810987:0x1357bce61d345258!8m2!3d26.3297158!4d50.1089762!16s%2Fg%2F1hdzf7gch?entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D',
            'Email us' => 'mailto:sge.30008310.itinfrastructurecadpmisdarvrteam@exchange.aramco.com.sa',
        ],
        'Support' => [
            'IT Help-Desk' => 'mailto:ithelpdesk@exchange.aramco.com.sa',
        ],
    ];
@endphp

<footer class="flex flex-col items-center">
    <div class="h-[0.8px] w-full bg-gradient-to-r from-transparent via-(--border-color) to-transparent ">
    </div>
    <div class="py-12 w-full max-w-(--page-width) px-(--section-x-padding)">
        <div class="flex justify-around">
            @foreach ($footerColumns as $title => $rows)
                <div class="flex flex-col">
                    <div class="text-(--text-primary-color) font-medium text-[16px] pb-2">
                        {{ $title }}
                    </div>
                    @foreach ($rows as $name => $link)
                        <div class="pb-1 max-w-[180px]">
                            <x-buttons.link-btn href="{{ $link }}">
                                {{ $name }}
                            </x-buttons.link-btn>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
        <p class="pt-6 text-(--text-secondary-color)/20  text-center text-[13px]">
            &copy; {{ date('Y') }} Corporate Applications Department, AR/VR Team.
        </p>
    </div>
</footer>
