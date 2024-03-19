@props(['active', 'navigate'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-5 pt-2 pb-2 border-b-2 text-md font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-5 pt-2 pb-2 border-b-2 border-transparent text-md font-medium leading-5 text-gray-500 hover:text-black hover:border-gray-200 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $navigate ?? true ? 'wire:navigate' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
