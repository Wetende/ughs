@props(['message' => '', 'politeness' => 'polite'])

<div 
    {{ $attributes->merge(['class' => 'sr-only']) }}
    aria-live="{{ $politeness }}" 
    role="{{ $politeness === 'assertive' ? 'alert' : 'status' }}"
>
    {{ $message }}
    {{ $slot }}
</div> 