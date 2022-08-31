@props(['active'])

@php
$classes = ($active ?? false)
            ? 'link link_active'
            : 'link';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
