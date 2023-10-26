@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#F26B22] focus:ring-[#F26B22] rounded-md shadow-sm']) !!}>
