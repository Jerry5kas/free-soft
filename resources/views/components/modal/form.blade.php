<div class=" space-y-4" x-cloak x-data="{ open: false }">

    <div class="w-full flex items-center justify-between">
        <div class="w-2/3">
            <x-input.search-bar label="Search" wire:model.live="search"/>
        </div>
        <div class="inline-flex items-center gap-2 text-sm tracking-wider font-semibold">
            <x-button.new-x @click="open = true" />
        </div>
    </div>
    {{ $slot }}

</div>
