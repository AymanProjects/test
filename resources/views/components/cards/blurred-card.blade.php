@props(['bgShadow'])

<div
    {{ $attributes->merge(['class' => 'bg-(--bg-primary-color)/90 backdrop-blur-sm border-[1px] border-(--border-color) overflow-clip ' . (isset($bgShadow) ? ' drop-shadow-[0px_0px_10px_rgba(0,0,0,0.7)] ' : '')]) }}>
    {{ $slot }}
</div>
