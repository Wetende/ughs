@props([
    'type' => 'button',
    'colour' => 'bg-blue-600 text-white border-blue-600',
    'class' => '',
    'icon' => '',
    'label' => '',
    'disabled' => false
])

<button 
    type="{{ $type }}"
    @class([
        "$class $colour hover:bg-opacity-90 active:bg-opacity-70 py-2 px-4 border-2 dark:border-0 rounded my-3",
        "transition-all duration-200 ease-in-out",
        "focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2",
        "disabled:opacity-50 disabled:cursor-not-allowed"
    ])
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes }}
>
    @if($icon)
        <i class="{{ $icon }} {{ $slot || $label ? 'mr-2' : '' }}" aria-hidden="true"></i>
    @endif
    {{ $slot }} {{ $label }}
</button>