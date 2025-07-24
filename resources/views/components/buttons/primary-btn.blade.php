@props(['large'])

<a {{ $attributes->only('href') }}
    class="{{ (isset($large) ? 'p-[1.5px] text-[12px] lg:text-[14px] ' : 'p-[0.8px] text-[10px] lg:text-[11px] ') . ' relative group inline-flex w-fit rounded-full website-gradient animate-self animate-children z-0' }}">
    {{-- <div class="opacity-0 group-hover:opacity-100 absolute inset-0 blur-sm rounded-full website-gradient -z-1">
    </div> --}}
    <div
        class="{{ (isset($large) ? 'pt-2 pb-2.5 px-5 ' : 'pt-1 pb-1.5 px-3 ') . ' bg-(--bg-primary-color) rounded-full relative overflow-hidden before:absolute before:-left-[40px] group-hover:before:left-[115%] before:-top-4 before:h-[180%] before:w-6 before:rotate-20 before:bg-neutral-400 before:opacity-10 before:duration-600' }}">
        <div class="flex text-nowrap uppercase tracking-[.1rem] font-medium">
            {{ $slot }}
        </div>
    </div>
</a>
