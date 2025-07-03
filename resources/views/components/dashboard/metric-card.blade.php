@props(['title', 'value', 'icon', 'color' => 'blue'])

@php
$colors = [
    'blue' => 'bg-blue-500',
    'green' => 'bg-green-500',
    'yellow' => 'bg-yellow-500',
    'red' => 'bg-red-500',
    'purple' => 'bg-purple-500',
    'indigo' => 'bg-indigo-500',
];

$bgColor = $colors[$color] ?? $colors['blue'];
@endphp

<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <div class="w-8 h-8 {{ $bgColor }} rounded-full flex items-center justify-center">
                {!! $icon !!}
            </div>
        </div>
        <div class="ml-4">
            <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ $title }}</h3>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $value }}</p>
        </div>
    </div>
</div>
