@props(['title', 'subtitle', 'link', 'image'])

<div
    {{ $attributes->merge(['class' => 'flex flex-col h-[350px] w-full max-w-[650px] rounded-3xl overflow-hidden border-[1px] border-(--border-color)']) }}">
    <img src={{ $image }} alt="preview" class="h-[55%] w-full brightness-80 object-cover">
    <div
        class="grow flex flex-col w-full justify-between px-[20px] pt-[14px] pb-[22px] bg-(--bg-primary-color) border-t-[1px] border-(--border-color)">
        <div>
            <div class="text-[18px] sm:text-[20px] font-medium capitalize pb-[1px]"> {{ $title }} </div>
            <div class="text-[14px] text-(--text-secondary-color) line-clamp-2 w-[80%]">{{ $subtitle }}</div>
        </div>
        <x-buttons.primary-btn href="{{ url($link) }}">
            <div class="group-hover:translate-x-1">
                Learn more &#x2192;
            </div>
        </x-buttons.primary-btn>
    </div>
</div>
