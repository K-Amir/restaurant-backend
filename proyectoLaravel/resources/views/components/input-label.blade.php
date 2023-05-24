@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-body-bold text-light-2']) }}>
    {{ $value ?? $slot }}
</label>
