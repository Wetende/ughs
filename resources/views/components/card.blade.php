@props([
    'title' => '',
    'subtitle' => '',
    'image' => '',
    'imageAlt' => '',
    'footer' => false,
    'hover' => false,
    'class' => ''
])

<div 
    @class([
        "bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden",
        "border border-gray-200 dark:border-gray-700",
        $hover ? "transition-transform duration-300 hover:shadow-lg hover:-translate-y-1" : "",
        $class
    ])
    {{ $attributes }}
>
    @if($image)
        <div class="relative">
            <img 
                src="{{ $image }}" 
                alt="{{ $imageAlt }}" 
                class="w-full h-48 object-cover"
                loading="lazy"
                width="400"
                height="200"
            >
        </div>
    @endif
    
    <div class="p-5">
        @if($title)
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">{{ $title }}</h3>
        @endif
        
        @if($subtitle)
            <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $subtitle }}</p>
        @endif
        
        <div class="text-gray-700 dark:text-gray-200">
            {{ $slot }}
        </div>
    </div>
    
    @if($footer)
        <div class="px-5 py-3 bg-gray-50 dark:bg-gray-700 border-t border-gray-200 dark:border-gray-600">
            {{ $footer }}
        </div>
    @endif
</div> 