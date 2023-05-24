@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-dark-3 text-body-bold text-light-2 focus:border-highlight-regular focus:ring-highlight-regular rounded-normal shadow-sm']) !!}>
