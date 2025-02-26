@props([
    'href' => '#',
    'colour' => 'text-blue-600 hover:text-blue-800',
    'class' => '',
    'icon' => '',
    'external' => false,
    'underline' => true
])

<a 
    href="{{ $href }}"
    @class([
        "$class $colour",
        "transition-all duration-200 ease-in-out",
        "focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 rounded-sm",
        $underline ? "hover:underline" : ""
    ])
    {{ $external ? 'target="_blank" rel="noopener noreferrer"' : '' }}
    {{ $attributes }}
>
    @if($icon)
        <i class="{{ $icon }} {{ $slot ? 'mr-2' : '' }}" aria-hidden="true"></i>
    @endif
    
    {{ $slot }}
    
    @if($external)
        <span class="sr-only">(opens in a new tab)</span>
        <i class="fas fa-external-link-alt text-xs ml-1" aria-hidden="true"></i>
    @endif
</a> 