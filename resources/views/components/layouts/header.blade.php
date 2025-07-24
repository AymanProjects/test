<header
    class="emphasized h-(--header-height) fixed flex flex-col backdrop-blur-xl bg-(--bg-primary-color)/80 items-center w-screen z-100 inset-0 animate-self animate-children">
    <div
        class="size-full flex items-center justify-between max-w-(--page-width) px-(--section-x-padding) emphasized:px-[calc(theme(--section-x-padding)*1.2)]">
        <div class="font-medium text-[18px] lg:text-[19px]">
            <a href="/#"
                class="flex gap-2 items-center text-transparent bg-clip-text website-gradient hover:opacity-60">
                <x-misc.material-icon class="icon-xr" size="20px"></x-misc.material-icon>
                XR Team
            </a>
        </div>
        <x-layouts.navigation>
        </x-layouts.navigation>
    </div>
    <div
        class="emphasized:opacity-0 h-[0.8px] w-full bg-gradient-to-r from-transparent via-(--border-color) to-transparent">
    </div>
</header>
