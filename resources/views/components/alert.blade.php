@props(['type' => 'info', 'message'])

@php
    $baseClass = match ($type) {
        'success' => 'bg-green-100 text-green-800 border-green-400',
        'error' => 'bg-red-100 text-red-800 border-red-400',
        'warning' => 'bg-yellow-100 text-yellow-800 border-yellow-400',
        default => 'bg-blue-100 text-blue-800 border-blue-400',
    };
@endphp

<div {{ $attributes->merge(['class' => "p-4 border-l-4 rounded mb-4 $baseClass"]) }}>
    {{ $message }}
</div>
