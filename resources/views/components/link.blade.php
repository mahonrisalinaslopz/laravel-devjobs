@php
    $classes = "text-sm text-gray-600 dark:text-gray-400 hover:text-gray-300"
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
