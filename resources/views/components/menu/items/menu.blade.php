@props([
    'label' => null,
])
<div class="w-full" x-data="{ isExpanded: false }">
    <button @click="isExpanded = ! isExpanded" :aria-expanded="isExpanded ? 'true' : 'false'" type="button"
        class="w-full flex justify-between items-center px-4 py-3 text-cyan-800 font-bold hover:bg-cyan-800 hover:text-white focus:bg-cyan-800 focus:outline-none focus:ring"
        wire:navigate>
        <div class="inline-flex items-center">
            <x-icons.swatch />
            <span class="mx-4">{{ $label }}</span>
        </div>
        <x-icons.down />
    </button>
    <div x-cloak x-show="isExpanded" x-collapse>
        {{ $slot }}
    </div>
</div>
