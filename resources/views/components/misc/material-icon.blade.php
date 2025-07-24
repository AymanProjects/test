@props(['size' => '24px'])

<div {{ $attributes->merge(['style' => 'font:100% "material"; font-size:' . $size . ';', 'class' => '']) }}>
</div>
