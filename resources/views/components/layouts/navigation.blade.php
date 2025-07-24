@php
    $navLinks = ['ENOA', 'AR-Studio', 'Unity', 'Digital-Helmet'];
@endphp

<nav class="hidden lg:flex gap-x-[25px] text-[14px]">
    <x-misc.nav-link href="{{ url('/') }}#">
        Home
    </x-misc.nav-link>
    @foreach ($navLinks as $link)
        <x-misc.nav-link href="{{ url('/' . $link) }}">
            {{ $link }}
        </x-misc.nav-link>
    @endforeach
</nav>

<div id="nav-menu" class="lg:hidden">
    <x-buttons.burger-btn onClick="toggleNavMenu();">
    </x-buttons.burger-btn>
    <nav
        class="fixed h-screen text-center inset-0 mt-(--header-height) bg-(--bg-primary-color)/95  opacity-0 open:opacity-100 invisible open:visible animate-self">
        <div class="flex flex-col text-[24px] font-semibold pointer-events-none open:pointer-events-auto">
            <x-misc.nav-link class="pt-[20px]" href="{{ url('/') }}#">
                Home
            </x-misc.nav-link>
            @foreach ($navLinks as $link)
                <x-misc.nav-link class="pt-[20px]" href="{{ url('/' . $link) }}">
                    {{ $link }}
                </x-misc.nav-link>
            @endforeach
        </div>
    </nav>
</div>
