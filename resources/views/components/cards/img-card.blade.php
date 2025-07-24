@props(['expandable', 'src'])

<div name="img-card"
    {{ $attributes->merge(['class' => (isset($expandable) ? 'expandable shadow-xl cursor-pointer' : '') . ' animate-self animate-children']) }}>
    <img class="size-full object-cover rounded-2xl border-[1px] border-(--border-color)" src="{{ $src }}"
        alt="preview">
</div>
