@props([
    'label'=>null,
])
<a class="flex justify-start items-center px-4 py-3 text-cyan-800 font-bold hover:bg-cyan-800 hover:text-white focus:bg-cyan-800 focus:outline-none focus:ring"
    wire:navigate {{ $attributes }}>
    <x-icons.tag />
    <span class="mx-4">{{ $label }}</span>
</a>
