@props(['href' => '#', 'icon', 'text', 'active' => false])

@php
$classes = $active
    ? 'flex items-center px-4 py-2 text-white bg-blue-800 dark:bg-blue-700 rounded-lg'
    : 'flex items-center px-4 py-2 text-white hover:bg-blue-800 dark:hover:bg-blue-700 rounded-lg transition-colors';
@endphp

<a href="{{ $href }}" class="{{ $classes }}">
    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        {!! $icon !!}
    </svg>
    {{ $text }}
</a>
