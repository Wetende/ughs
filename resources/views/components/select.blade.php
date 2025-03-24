@props(['disabled' => false, 'label' => '', 'name', 'id', 'groupClass' => '', 'class' => ''])

<div class="{{ $groupClass }}">
    @if($label)
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 mb-1">{!! $label !!}</label>
    @endif
    
    <select 
        {{ $disabled ? 'disabled' : '' }} 
        {!! $attributes->merge([
            'class' => 'form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 ' . $class,
            'id' => $id,
            'name' => $name,
        ]) !!}
        style="background-color: white !important; color: #333 !important;"
    >
        {{ $slot }}
    </select>
</div>

<style>
    /* Ensure dropdown options have white background and black text */
    select option {
        background-color: white !important;
        color: #333 !important;
        padding: 6px;
    }
    
    /* Fix dropdown appearance in different browsers */
    select {
        -webkit-appearance: menulist !important;
        -moz-appearance: menulist !important;
        appearance: menulist !important;
        background-color: white !important;
        color: #333 !important;
    }
</style>