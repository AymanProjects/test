{{-- To animate this button, you need to supply the 'open' class to it or to its ancestors, through JS ofcourse --}}
<button
    {{ $attributes->merge(['class' => 'outline-offset-4 cursor-pointer flex flex-col justify-between hover:opacity-60 w-[24px] h-[11.5px] z-105 animate-self animate-children']) }}>
    <span
        class="open:translate-y-[4px] open:rotate-[45deg] h-[1.5px] line bg-(--text-primary-color) rounded-full"></span>
    <span
        class="open:translate-y-[-6px] open:rotate-[-45deg] h-[1.5px] line bg-(--text-primary-color) rounded-full"></span>
</button>
